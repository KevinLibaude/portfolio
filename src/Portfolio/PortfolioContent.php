<?php

namespace App\Portfolio;

final class PortfolioContent
{
    public static function identity(): array
    {
        return [
            'name' => 'Kevin Libaude',
            'role' => "Concepteur & développeur d'application",
            'promise' => "J'aide les entreprises, associations et indépendants à transformer leurs besoins métier en outils numériques simples, fiables et durables.",
            'subtitle' => "Conception et développement d'applications web, d'outils internes et de solutions sur mesure.",
        ];
    }

    public static function services(): array
    {
        return [
            [
                'title' => 'Application web sur mesure',
                'description' => "Pour créer un outil adapté à votre activité, vos utilisateurs et vos contraintes.",
            ],
            [
                'title' => 'Outil métier / outil interne',
                'description' => "Pour simplifier votre organisation, centraliser vos données ou automatiser des tâches répétitives.",
            ],
            [
                'title' => "Évolution d'un projet existant",
                'description' => "Pour améliorer, corriger, moderniser ou faire évoluer une application déjà en place.",
            ],
        ];
    }

    public static function methodology(): array
    {
        return [
            [
                'index' => '01',
                'title' => 'Comprendre',
                'description' => 'Clarifier le besoin, les contraintes, les utilisateurs et les objectifs.',
            ],
            [
                'index' => '02',
                'title' => 'Concevoir',
                'description' => 'Définir une solution réaliste, lisible et adaptée à votre activité.',
            ],
            [
                'index' => '03',
                'title' => 'Développer',
                'description' => "Construire l'application avec une base technique propre et maintenable.",
            ],
            [
                'index' => '04',
                'title' => 'Livrer',
                'description' => 'Mettre en ligne une première version utilisable, claire et stable.',
            ],
            [
                'index' => '05',
                'title' => 'Faire évoluer',
                'description' => 'Améliorer la solution selon les retours et les usages réels.',
            ],
        ];
    }

    public static function expertises(): array
    {
        return [
            [
                'title' => 'Analyse du besoin',
                'description' => 'Comprendre ce qui doit être résolu avant de penser à la solution.',
            ],
            [
                'title' => "Conception d'application",
                'description' => 'Structurer les fonctionnalités, les parcours et les priorités.',
            ],
            [
                'title' => 'Développement Symfony',
                'description' => 'Construire des applications web robustes, maintenables et évolutives.',
            ],
            [
                'title' => 'Interfaces simples',
                'description' => 'Créer des écrans compréhensibles, utiles et adaptés aux utilisateurs.',
            ],
        ];
    }

    public static function projects(): array
    {
        return [
            [
                'slug' => 'entreprise-marques',
                'name' => 'Entreprise Marques',
                'image' => '/projects/entreprise-marques/site.png',
                'type' => 'Refonte de site vitrine',
                'status' => 'En ligne',
                'summary' => "Refonte progressive d'un site legacy de terrassement vers une base Symfony plus propre, plus fiable et plus simple à faire évoluer.",
                'problem' => "Le site historique devait continuer à servir l'activité tout en sortant d'une base PHP artisanale devenue plus difficile à maintenir.",
                'challenge' => "Migrer sans casser les parcours existants, sans perdre le contenu métier et sans ajouter de complexité inutile.",
                'solution' => "Mise en place d'une refonte Symfony progressive avec reprise des pages clés, du portfolio, des assets, du formulaire de contact et des intégrations existantes.",
                'result' => "Le projet dispose désormais d'une base plus lisible, testable et prête à accueillir des évolutions futures.",
                'facts' => [
                    ['label' => 'Contexte', 'value' => 'Migration legacy vers Symfony'],
                    ['label' => 'Statut', 'value' => 'Projet en ligne'],
                    ['label' => 'Approche', 'value' => 'Refonte incrémentale'],
                ],
                'links' => [
                    ['label' => 'Voir le site', 'url' => 'https://www.entreprise-marques.fr/'],
                ],
                'sections' => [
                    [
                        'label' => 'Contexte',
                        'title' => 'Un site vitrine qui devait rester utile pendant la refonte',
                        'content' => "Le site présente une activité de terrassement, de démolition, d'assainissement et de location d'engins avec chauffeur. L'enjeu n'était pas de repartir de zéro, mais de moderniser la base technique sans perturber la visibilité en ligne.",
                    ],
                    [
                        'label' => 'Objectif',
                        'title' => 'Remettre le projet sur des fondations maintenables',
                        'content' => "L'objectif principal était de remplacer progressivement le site PHP historique par une architecture Symfony plus propre, centralisée et évolutive, tout en conservant le contenu, les assets et les parcours utiles.",
                    ],
                    [
                        'label' => 'Travail',
                        'title' => 'Reprise des pages, du portfolio et du contact',
                        'content' => "La refonte couvre déjà le layout global, la navigation, les principales pages vitrines, les pages portfolio, le formulaire de contact, l'envoi via Brevo, la protection anti-spam Turnstile et une première base de tests fonctionnels.",
                    ],
                    [
                        'label' => 'Résultat',
                        'title' => 'Une base plus propre sans rupture brutale',
                        'content' => "Le projet gagne en clarté, en fiabilité et en capacité d'évolution. La migration progressive limite les risques de régression et permet d'améliorer le site sans bloquer l'activité.",
                    ],
                ],
                'list_sections' => [
                    [
                        'eyebrow' => 'Ce que la refonte apporte',
                        'title' => 'Des briques concrètes déjà en place',
                        'variant' => 'cards',
                        'items' => [
                            [
                                'title' => 'Pages migrées',
                                'description' => 'Accueil, pages vitrines et galeries portfolio ont été reprises dans Symfony.',
                            ],
                            [
                                'title' => 'Contact fiabilisé',
                                'description' => 'Validation serveur, envoi via Brevo et protection Turnstile côté serveur.',
                            ],
                            [
                                'title' => 'Reprise des assets',
                                'description' => "Les contenus visuels et les fichiers utiles de l'ancien site ont été conservés.",
                            ],
                            [
                                'title' => 'Tests initiaux',
                                'description' => 'Une première couverture fonctionnelle sécurise les parcours principaux.',
                            ],
                        ],
                    ],
                ],
                'stack' => ['PHP 8.4', 'Symfony 8', 'Twig', 'PHPUnit', 'Brevo', 'Cloudflare Turnstile', 'DDEV'],
            ],
            [
                'slug' => 'kairos-mediation',
                'image' => null,
                'name' => 'Kairos Médiation',
                'type' => 'Application métier / SaaS',
                'status' => 'En développement',
                'summary' => "Une plateforme métier pensée pour centraliser le suivi des dossiers de médiation, les rendez-vous, les utilisateurs et les interactions dans une interface unique.",
                'problem' => "Le suivi d'un processus de médiation implique plusieurs acteurs, des dossiers, des rendez-vous, des notifications et des échanges qui gagnent à être structurés dans un seul outil.",
                'challenge' => "Construire un socle produit clair dès le départ, avec une vraie séparation front/back et un périmètre métier capable d'évoluer.",
                'solution' => "Conception d'une application avec front React/Vite et API Symfony dédiée, couvrant l'authentification, les utilisateurs, les dossiers, les rendez-vous, les interactions et les notifications.",
                'result' => "Le produit est encore en construction, mais son architecture et son vocabulaire métier sont déjà posés pour permettre une évolution progressive.",
                'facts' => [
                    ['label' => 'Format', 'value' => 'Front + API séparés'],
                    ['label' => 'Statut', 'value' => 'En développement'],
                    ['label' => 'Usage', 'value' => 'Suivi de dossiers de médiation'],
                ],
                'links' => [],
                'sections' => [
                    [
                        'label' => 'Vision',
                        'title' => 'Un outil métier conçu autour du suivi des dossiers',
                        'content' => "Kairos vise à regrouper dans une seule application les différents objets utiles au pilotage d'une activité de médiation : utilisateurs, dossiers, interactions, rendez-vous et notifications.",
                    ],
                    [
                        'label' => 'Architecture',
                        'title' => "Une base claire avec un front distinct de l'API",
                        'content' => "Le projet s'appuie sur un front React/Vite dédié à l'interface et sur une API Symfony séparée pour la logique métier, l'accès aux données, la sécurité et l'exposition des endpoints.",
                    ],
                    [
                        'label' => 'Métier',
                        'title' => 'Un périmètre déjà identifiable',
                        'content' => "Les routes et contrôleurs existants montrent déjà les grands blocs fonctionnels : authentification, utilisateurs, gestion des dossiers, rendez-vous, interactions liées aux dossiers et notifications.",
                    ],
                    [
                        'label' => 'Avancement',
                        'title' => 'Un socle en place pour faire grandir le produit',
                        'content' => "L'application n'est pas encore finalisée, mais elle dispose déjà d'un vocabulaire cohérent, d'une structure technique propre et d'un découpage qui facilitera la suite du développement.",
                    ],
                ],
                'list_sections' => [
                    [
                        'eyebrow' => 'Fonctionnalités posées',
                        'title' => 'Les premiers blocs du produit',
                        'variant' => 'cards',
                        'items' => [
                            [
                                'title' => 'Authentification',
                                'description' => "Endpoints de login, logout, refresh et inscription sur l'API Symfony.",
                            ],
                            [
                                'title' => 'Utilisateurs',
                                'description' => 'Lecture et gestion de comptes avec entité utilisateur et repository dédié.',
                            ],
                            [
                                'title' => 'Dossiers et interactions',
                                'description' => 'Structure prévue pour les dossiers de médiation et les interactions associées.',
                            ],
                            [
                                'title' => 'Rendez-vous et notifications',
                                'description' => 'Endpoints dédiés aux appointments et aux notifications email ou SMS.',
                            ],
                        ],
                    ],
                ],
                'stack' => ['Symfony 7', 'API Platform', 'Doctrine ORM', 'JWT', 'React 19', 'Vite', 'Axios', 'React Router', 'Tailwind CSS'],
            ],
            [
                'slug' => 'php-security-suite',
                'image' => null,
                'name' => 'PHP Security Suite',
                'type' => "Suite d'outils / sécurité",
                'status' => 'En développement',
                'summary' => "Une suite d'outils pensée pour accélérer le travail sur des projets PHP tout en apportant des capacités d'audit, d'analyse et de sécurisation.",
                'problem' => "Les besoins de sécurité, d'inspection technique et d'automatisation sont souvent dispersés entre plusieurs outils ou scripts ponctuels.",
                'challenge' => "Rendre des sujets techniques parfois arides plus lisibles, plus centralisés et plus actionnables dans un seul environnement.",
                'solution' => "Le projet regroupe des outils de hash, de token, d'analyse d'architecture, d'audit web, de scan de vulnérabilités et de gestion multi-projets dans une interface unifiée.",
                'result' => "Le socle actuel montre déjà un produit modulaire, orienté usage réel, capable de servir à la fois la sécurité et la productivité de développement.",
                'facts' => [
                    ['label' => 'Positionnement', 'value' => 'Dev tools + sécurité'],
                    ['label' => 'Statut', 'value' => 'Produit en construction'],
                    ['label' => 'Valeur', 'value' => 'Centraliser audits et workflow'],
                ],
                'links' => [],
                'sections' => [
                    [
                        'label' => 'Concept',
                        'title' => 'Une boîte à outils pensée comme un cockpit de travail',
                        'content' => "L'idée n'est pas seulement d'additionner des petits utilitaires, mais de proposer un environnement unique pour consulter ses projets, lancer des analyses et récupérer des sorties directement exploitables.",
                    ],
                    [
                        'label' => 'Sécurité',
                        'title' => 'Des outils d’inspection et de contrôle intégrés',
                        'content' => "Le projet embarque déjà des briques pour le hash bcrypt, les tokens, l'audit web passif, le scan de ports, l'analyse de vulnérabilités Composer ou npm et la restitution de rapports lisibles.",
                    ],
                    [
                        'label' => 'Productivité',
                        'title' => 'Un support direct au travail quotidien sur plusieurs projets',
                        'content' => "La gestion multi-projets, les rapports d'architecture, les itérations, les essais ou les intégrations DDEV montrent une volonté claire de relier outillage technique et usage concret de développement.",
                    ],
                    [
                        'label' => 'Différenciation',
                        'title' => 'Transformer des analyses brutes en sorties compréhensibles',
                        'content' => "Une partie de la valeur vient de la restitution : rapports, tableaux de bord, synthèses et vues d'ensemble rendent des informations techniques plus accessibles et plus utiles à la prise de décision.",
                    ],
                ],
                'list_sections' => [
                    [
                        'eyebrow' => 'Modules repérés',
                        'title' => 'Les briques qui structurent déjà le produit',
                        'variant' => 'cards',
                        'items' => [
                            [
                                'title' => 'Audit et vulnérabilités',
                                'description' => 'Scans Composer, npm et audits web passifs avec restitution synthétique.',
                            ],
                            [
                                'title' => 'Architecture et benchmark',
                                'description' => 'Analyse de structure projet, détection de routes Symfony et modules de benchmark.',
                            ],
                            [
                                'title' => 'Sécurité applicative',
                                'description' => 'Hash bcrypt, JWT, génération de tokens et scanners orientés sécurité.',
                            ],
                            [
                                'title' => 'Gestion multi-projets',
                                'description' => 'Inventaire des projets, statuts Git, DDEV et actions rapides centralisées.',
                            ],
                        ],
                    ],
                ],
                'stack' => ['PHP', 'Twig', 'Composer audit', 'npm audit', 'DDEV', 'Rapports HTML', 'Outils CLI'],
            ],
        ];
    }

    public static function project(string $slug): ?array
    {
        foreach (self::projects() as $project) {
            if ($project['slug'] === $slug) {
                return $project;
            }
        }

        return null;
    }
}
