<?php

namespace App\Controller;

use App\Service\SmtpContactMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    public function __construct(private readonly SmtpContactMailer $contactMailer)
    {
    }

    #[Route('/contact', name: 'app_contact_send', methods: ['POST'])]
    public function send(Request $request): RedirectResponse
    {
        $token = (string) $request->request->get('_token', '');

        if (!$this->isCsrfTokenValid('contact_form', $token)) {
            $this->addFlash('contact_error', 'La session du formulaire a expire. Merci de reessayer.');

            return $this->redirectToContact('error');
        }

        $contact = [
            'name' => trim((string) $request->request->get('name', '')),
            'email' => trim((string) $request->request->get('email', '')),
            'project' => trim((string) $request->request->get('project', '')),
            'message' => trim((string) $request->request->get('message', '')),
        ];

        if ($contact['name'] === '' || $contact['email'] === '' || $contact['message'] === '') {
            $this->addFlash('contact_error', 'Merci de renseigner votre nom, votre email et votre message.');

            return $this->redirectToContact('error');
        }

        if (filter_var($contact['email'], FILTER_VALIDATE_EMAIL) === false) {
            $this->addFlash('contact_error', 'L adresse email semble invalide.');

            return $this->redirectToContact('error');
        }

        try {
            $this->contactMailer->send($contact);
        } catch (\Throwable) {
            $this->addFlash('contact_error', 'Le message n a pas pu etre envoye pour le moment. Merci de reessayer un peu plus tard.');

            return $this->redirectToContact('error');
        }

        $this->addFlash('contact_success', 'Votre message a bien ete envoye. Je vous repondrai rapidement.');

        return $this->redirectToContact('success');
    }

    private function redirectToContact(string $status): RedirectResponse
    {
        return $this->redirect($this->generateUrl('app_home', ['contact' => $status]) . '#contact');
    }
}
