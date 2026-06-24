<?php

namespace App\Service;

use RuntimeException;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

final class SmtpContactMailer
{
    public function __construct(
        #[Autowire('%env(MAILER_DSN)%')]
        private readonly string $mailerDsn,
        #[Autowire('%env(CONTACT_RECIPIENT_EMAIL)%')]
        private readonly string $recipientEmail,
        private readonly string $senderEmail = 'noreply@portfolio.local',
        private readonly string $senderName = 'Portfolio contact'
    ) {
    }

    /**
     * @param array{name:string,email:string,project:string,message:string} $contact
     */
    public function send(array $contact): void
    {
        $config = $this->parseDsn($this->mailerDsn);
        $socket = @stream_socket_client(
            sprintf('%s://%s:%d', $config['scheme'], $config['host'], $config['port']),
            $errorCode,
            $errorMessage,
            10
        );

        if ($socket === false) {
            throw new RuntimeException(sprintf('Connexion SMTP impossible: %s (%d).', $errorMessage, $errorCode));
        }

        stream_set_timeout($socket, 10);

        try {
            $this->assertResponse($socket, [220]);
            $this->write($socket, sprintf("EHLO %s\r\n", $config['hello']));
            $this->assertResponse($socket, [250]);

            if ($config['username'] !== null && $config['password'] !== null) {
                $this->write($socket, "AUTH LOGIN\r\n");
                $this->assertResponse($socket, [334]);
                $this->write($socket, base64_encode($config['username']) . "\r\n");
                $this->assertResponse($socket, [334]);
                $this->write($socket, base64_encode($config['password']) . "\r\n");
                $this->assertResponse($socket, [235]);
            }

            $this->write($socket, sprintf("MAIL FROM:<%s>\r\n", $this->senderEmail));
            $this->assertResponse($socket, [250]);
            $this->write($socket, sprintf("RCPT TO:<%s>\r\n", $this->recipientEmail));
            $this->assertResponse($socket, [250, 251]);
            $this->write($socket, "DATA\r\n");
            $this->assertResponse($socket, [354]);
            $this->write($socket, $this->buildMessage($contact));
            $this->assertResponse($socket, [250]);
            $this->write($socket, "QUIT\r\n");
        } finally {
            fclose($socket);
        }
    }

    /**
     * @return array{scheme:string,host:string,port:int,hello:string,username:?string,password:?string}
     */
    private function parseDsn(string $dsn): array
    {
        $parts = parse_url($dsn);

        if ($parts === false || !isset($parts['scheme'], $parts['host'])) {
            throw new RuntimeException('MAILER_DSN invalide.');
        }

        $scheme = match ($parts['scheme']) {
            'smtp' => 'tcp',
            'smtps' => 'ssl',
            default => throw new RuntimeException(sprintf('Schéma SMTP non supporté: %s.', $parts['scheme'])),
        };

        return [
            'scheme' => $scheme,
            'host' => $parts['host'],
            'port' => $parts['port'] ?? ($scheme === 'ssl' ? 465 : 25),
            'hello' => gethostname() ?: 'localhost',
            'username' => isset($parts['user']) ? urldecode($parts['user']) : null,
            'password' => isset($parts['pass']) ? urldecode($parts['pass']) : null,
        ];
    }

    /**
     * @param array{name:string,email:string,project:string,message:string} $contact
     */
    private function buildMessage(array $contact): string
    {
        $subject = $contact['project'] !== '' ? $contact['project'] : 'Prise de contact portfolio';
        $bodyLines = [
            sprintf('Nom : %s', $contact['name']),
            sprintf('Email : %s', $contact['email']),
            sprintf('Projet : %s', $contact['project'] !== '' ? $contact['project'] : 'Non précisé'),
            '',
            $contact['message'],
        ];

        $headers = [
            sprintf('From: %s <%s>', $this->senderName, $this->senderEmail),
            sprintf('Reply-To: %s <%s>', $contact['name'], $contact['email']),
            sprintf('To: <%s>', $this->recipientEmail),
            sprintf('Subject: %s', $this->encodeHeader($subject)),
            'MIME-Version: 1.0',
            'Content-Type: text/plain; charset=UTF-8',
            'Content-Transfer-Encoding: 8bit',
        ];

        $body = str_replace(["\r\n", "\r"], "\n", implode("\n", $bodyLines));
        $body = preg_replace("/^\./m", '..', $body) ?? $body;

        return implode("\r\n", $headers) . "\r\n\r\n" . str_replace("\n", "\r\n", $body) . "\r\n.\r\n";
    }

    private function encodeHeader(string $value): string
    {
        return sprintf('=?UTF-8?B?%s?=', base64_encode($value));
    }

    /**
     * @param list<int> $expectedCodes
     */
    private function assertResponse($socket, array $expectedCodes): void
    {
        $response = '';

        do {
            $line = fgets($socket);

            if ($line === false) {
                throw new RuntimeException('Réponse SMTP incomplète.');
            }

            $response .= $line;
            $hasMore = isset($line[3]) && $line[3] === '-';
        } while ($hasMore);

        $code = (int) substr($response, 0, 3);

        if (!in_array($code, $expectedCodes, true)) {
            throw new RuntimeException(sprintf('Erreur SMTP: %s', trim($response)));
        }
    }

    private function write($socket, string $payload): void
    {
        $written = fwrite($socket, $payload);

        if ($written === false || $written < strlen($payload)) {
            throw new RuntimeException('Écriture SMTP impossible.');
        }
    }
}
