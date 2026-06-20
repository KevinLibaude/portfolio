<?php

namespace App\Portfolio;

final class PortfolioContent
{
    public static function identity(): array
    {
        return [
            'name' => 'Kevin Libaude',
            'role' => "Concepteur & développeur d'application",
            'promise' => 'Transformons vos besoins métier en outils numériques simples, fiables et durables.',
            'subtitle' => "Conception et développement d'applications web, d'outils internes et de solutions sur mesure.",
        ];
    }

    public static function services(): array
    {
        return [
            [
                'title' => 'Application web sur mesure',
                'description' => 'Pour créer un outil adapté à votre activité, vos utilisateurs et vos contraintes.',
            ],
            [
                'title' => 'Outil métier / outil interne',
                'description' => 'Pour simplifier votre organisation, centraliser vos données ou automatiser des tâches répétitives.',
            ],
            [
                'title' => "Évolution d'un projet existant",
                'description' => 'Pour améliorer, corriger, moderniser ou faire évoluer une application déjà en place.',
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
                'image' => '/projects/entreprise-marques/site.webp',
                'type' => 'Refonte de site vitrine',
                'status' => 'En ligne',
                'summary' => "Refonte progressive d'un site legacy de terrassement vers une base Symfony plus propre, plus fiable et plus simple à faire évoluer.",
                'problem' => "Le site historique devait continuer à servir l'activité tout en sortant d'une base PHP artisanale devenue plus difficile à maintenir.",
                'challenge' => 'Migrer sans casser les parcours existants, sans perdre le contenu métier et sans ajouter de complexité inutile.',
                'solution' => "Mise en place d'une refonte Symfony progressive avec reprise des pages clés, du portfolio, des assets, du formulaire de contact et des intégrations existantes.",
                'result' => "Le projet dispose désormais d'une base plus lisible, testable et prête à accueillir des évolutions futures.",
                'hero' => [
                    'eyebrow' => 'Refonte progressive',
                    'headline' => 'Moderniser un site utile au quotidien sans le mettre à l arrêt.',
                    'intro' => "L enjeu n était pas d habiller un nouveau site vitrine, mais de sécuriser la continuité métier pendant la migration vers Symfony.",
                ],
                'facts' => [
                    ['label' => 'Contexte', 'value' => 'Migration legacy vers Symfony'],
                    ['label' => 'Statut', 'value' => 'Projet en ligne'],
                    ['label' => 'Approche', 'value' => 'Refonte incrémentale'],
                    ['label' => 'Priorité', 'value' => 'Continuité de service'],
                ],
                'before_after' => [
                    'eyebrow' => 'Avant / apres',
                    'title' => 'Une refonte pensée comme une transition maîtrisée',
                    'before' => [
                        'label' => 'Avant',
                        'text' => "Un socle PHP artisanal, devenu plus coûteux à maintenir, avec un risque croissant dès qu il fallait toucher au contenu, au contact ou aux parcours principaux.",
                    ],
                    'after' => [
                        'label' => 'Après',
                        'text' => "Une base Symfony plus claire, avec un layout unifié, des pages reprises proprement, un contact fiabilisé et un terrain beaucoup plus sain pour la suite.",
                    ],
                ],
                'constraints' => [
                    'eyebrow' => 'Contraintes',
                    'title' => 'Ce qui devait rester sous contrôle pendant la refonte',
                    'items' => [
                        [
                            'title' => 'Ne pas couper la visibilité',
                            'description' => 'Le site devait rester exploitable pendant la reprise, sans rupture brutale pour les visiteurs ni pour le référencement.',
                        ],
                        [
                            'title' => 'Conserver le patrimoine utile',
                            'description' => "Le contenu métier, les visuels et les pages déjà installées dans les usages ne devaient pas être perdus dans une refonte totale.",
                        ],
                        [
                            'title' => 'Éviter la dette déguisée',
                            'description' => "L objectif n était pas de déplacer le legacy ailleurs, mais de reconstruire une base lisible et testable au fil de l eau.",
                        ],
                    ],
                ],
                'decisions' => [
                    'eyebrow' => 'Decisions cles',
                    'title' => 'Les choix structurants qui ont guidé la reprise',
                    'items' => [
                        [
                            'title' => 'Refonte incrémentale plutôt que big bang',
                            'description' => 'Chaque zone reprise réduit le risque global, tout en gardant le site utile à chaque étape de migration.',
                        ],
                        [
                            'title' => 'Symfony comme socle unique',
                            'description' => 'Le framework apporte une structure nette pour le routage, les templates, la validation et la maintenabilité générale.',
                        ],
                        [
                            'title' => 'Sécuriser tôt le formulaire de contact',
                            'description' => 'Le contact est un point sensible à la fois métier et sécurité, donc traité comme une brique prioritaire.',
                        ],
                    ],
                ],
                'delivery' => [
                    'eyebrow' => 'Perimetre realise',
                    'title' => 'Ce qui a déjà été repris concrètement',
                    'items' => [
                        [
                            'title' => 'Pages vitrines et navigation',
                            'description' => 'Reprise des gabarits principaux, de la structure visuelle et des parcours de consultation.',
                        ],
                        [
                            'title' => 'Portfolio et contenus visuels',
                            'description' => 'Migration des pages projet et conservation des assets utiles pour ne pas perdre la matière existante.',
                        ],
                        [
                            'title' => 'Contact et intégrations',
                            'description' => 'Validation serveur, envoi via Brevo, protection Cloudflare Turnstile et premiers tests fonctionnels.',
                        ],
                    ],
                ],
                'sections' => [
                    [
                        'label' => 'Contexte',
                        'title' => 'Un site vitrine qui devait rester utile pendant la refonte',
                        'content' => "Le site présente une activité de terrassement, de démolition, d assainissement et de location d engins avec chauffeur. L enjeu n était pas de repartir de zéro, mais de moderniser la base technique sans perturber la visibilité en ligne.",
                    ],
                    [
                        'label' => 'Objectif',
                        'title' => 'Remettre le projet sur des fondations maintenables',
                        'content' => "L objectif principal était de remplacer progressivement le site PHP historique par une architecture Symfony plus propre, centralisée et évolutive, tout en conservant le contenu, les assets et les parcours utiles.",
                    ],
                    [
                        'label' => 'Travail',
                        'title' => 'Reprise des pages, du portfolio et du contact',
                        'content' => "La refonte couvre déjà le layout global, la navigation, les principales pages vitrines, les pages portfolio, le formulaire de contact, l envoi via Brevo, la protection anti spam Turnstile et une première base de tests fonctionnels.",
                    ],
                    [
                        'label' => 'Résultat',
                        'title' => 'Une base plus propre sans rupture brutale',
                        'content' => "Le projet gagne en clarté, en fiabilité et en capacité d évolution. La migration progressive limite les risques de régression et permet d améliorer le site sans bloquer l activité.",
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
                                'description' => "Les contenus visuels et les fichiers utiles de l ancien site ont été conservés.",
                            ],
                            [
                                'title' => 'Tests initiaux',
                                'description' => 'Une première couverture fonctionnelle sécurise les parcours principaux.',
                            ],
                        ],
                    ],
                ],
                'outcomes' => [
                    'eyebrow' => 'Benefices',
                    'title' => 'Ce que cette base change vraiment',
                    'items' => [
                        ['label' => 'Maintenance', 'value' => 'Interventions plus lisibles et moins risquées'],
                        ['label' => 'Fiabilité', 'value' => 'Parcours clés mieux sécurisés et testables'],
                        ['label' => 'Évolution', 'value' => 'Socle prêt à accueillir de nouvelles reprises'],
                    ],
                ],
                'stack_details' => [
                    'eyebrow' => 'Base technique',
                    'title' => 'Des briques choisies pour stabiliser et faire évoluer',
                    'items' => [
                        ['name' => 'Symfony 8', 'role' => 'Structure applicative, routage, validation et maintenabilité globale.'],
                        ['name' => 'Twig', 'role' => 'Templates clairs et centralisés pour la reprise des pages vitrines.'],
                        ['name' => 'Brevo', 'role' => 'Envoi de messages pour garder un canal de contact fiable.'],
                        ['name' => 'Turnstile', 'role' => 'Réduction du spam côté serveur sur un point sensible du site.'],
                    ],
                ],
                'links' => [
                    ['label' => 'Voir le site', 'url' => 'https://www.entreprise-marques.fr/'],
                ],
                'next_steps' => [
                    'eyebrow' => 'Suite du projet',
                    'title' => 'Les prochaines évolutions les plus naturelles',
                    'items' => [
                        [
                            'title' => 'Poursuivre la migration des zones restantes',
                            'description' => 'Avancer sans rupture, en traitant les zones legacy encore présentes selon leur impact réel.',
                        ],
                        [
                            'title' => 'Renforcer la couverture de tests',
                            'description' => 'Sécuriser davantage les parcours métier et les futurs chantiers de reprise.',
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
                'summary' => 'Une plateforme métier pensée pour centraliser le suivi des dossiers de médiation, les rendez-vous, les utilisateurs et les interactions dans une interface unique.',
                'problem' => "Le suivi d un processus de médiation implique plusieurs acteurs, des dossiers, des rendez-vous, des notifications et des échanges qui gagnent à être structurés dans un seul outil.",
                'challenge' => "Construire un socle produit clair dès le départ, avec une vraie séparation front / back et un périmètre métier capable d évoluer.",
                'solution' => "Conception d une application avec front React / Vite et API Symfony dédiée, couvrant l authentification, les utilisateurs, les dossiers, les rendez vous, les interactions et les notifications.",
                'result' => 'Le produit est encore en construction, mais son architecture et son vocabulaire métier sont déjà posés pour permettre une évolution progressive.',
                'hero' => [
                    'eyebrow' => 'Produit metier',
                    'headline' => 'Concevoir un outil de médiation lisible pour plusieurs acteurs et plusieurs temps de suivi.',
                    'intro' => 'Le sujet n est pas seulement de stocker des dossiers, mais d organiser un processus sensible avec ses rendez vous, ses échanges et ses notifications.',
                ],
                'facts' => [
                    ['label' => 'Format', 'value' => 'Front + API séparés'],
                    ['label' => 'Statut', 'value' => 'En développement'],
                    ['label' => 'Usage', 'value' => 'Suivi de dossiers de médiation'],
                    ['label' => 'Ambition', 'value' => 'Socle SaaS évolutif'],
                ],
                'before_after' => [
                    'eyebrow' => 'Avant / apres',
                    'title' => 'Passer d un suivi dispersé à un cadre produit cohérent',
                    'before' => [
                        'label' => 'Avant',
                        'text' => 'Le besoin métier repose sur plusieurs objets et échanges qui, sans outil unifié, deviennent vite difficiles à suivre dans le temps.',
                    ],
                    'after' => [
                        'label' => 'Après',
                        'text' => 'Le produit pose une colonne vertébrale claire : utilisateurs, dossiers, interactions, rendez vous et notifications suivent un même vocabulaire et un même flux.',
                    ],
                ],
                'constraints' => [
                    'eyebrow' => 'Contraintes',
                    'title' => 'Les sujets à cadrer dès le début',
                    'items' => [
                        [
                            'title' => 'Plusieurs rôles et responsabilités',
                            'description' => 'La plateforme doit porter des usages différents sans mélanger les droits, la lecture et les actions possibles.',
                        ],
                        [
                            'title' => 'Un vocabulaire métier sensible',
                            'description' => "Les objets manipulés doivent être nommés et structurés proprement pour rester compréhensibles dans la durée.",
                        ],
                        [
                            'title' => 'Un produit amené à grandir',
                            'description' => 'Le socle doit permettre des itérations progressives sans refermer le projet trop tôt sur un périmètre rigide.',
                        ],
                    ],
                ],
                'decisions' => [
                    'eyebrow' => 'Decisions cles',
                    'title' => 'Les choix qui donnent déjà une direction produit nette',
                    'items' => [
                        [
                            'title' => 'Séparer clairement interface et logique métier',
                            'description' => 'React / Vite porte le front, tandis que Symfony structure l API, la sécurité et les données.',
                        ],
                        [
                            'title' => 'Poser tôt les objets métier centraux',
                            'description' => 'Utilisateurs, dossiers, interactions, rendez vous et notifications servent déjà de langage commun au produit.',
                        ],
                        [
                            'title' => 'Construire un socle avant d empiler des écrans',
                            'description' => 'La priorité est de clarifier la structure du produit pour éviter une application visuellement avancée mais techniquement floue.',
                        ],
                    ],
                ],
                'delivery' => [
                    'eyebrow' => 'Perimetre pose',
                    'title' => 'Les premiers blocs déjà identifiables dans le produit',
                    'items' => [
                        [
                            'title' => 'Authentification et comptes',
                            'description' => 'Les endpoints de login, logout, refresh et inscription posent la base du contrôle d accès.',
                        ],
                        [
                            'title' => 'Gestion des dossiers',
                            'description' => 'La structure métier du suivi de médiation commence à être visible dans les routes et les contrôleurs.',
                        ],
                        [
                            'title' => 'Rendez vous, interactions et notifications',
                            'description' => 'Les objets périphériques du suivi sont déjà envisagés comme des briques à part entière.',
                        ],
                    ],
                ],
                'sections' => [
                    [
                        'label' => 'Vision',
                        'title' => 'Un outil métier conçu autour du suivi des dossiers',
                        'content' => 'Kairos vise à regrouper dans une seule application les différents objets utiles au pilotage d une activité de médiation : utilisateurs, dossiers, interactions, rendez vous et notifications.',
                    ],
                    [
                        'label' => 'Architecture',
                        'title' => 'Une base claire avec un front distinct de l API',
                        'content' => "Le projet s appuie sur un front React / Vite dédié à l interface et sur une API Symfony séparée pour la logique métier, l accès aux données, la sécurité et l exposition des endpoints.",
                    ],
                    [
                        'label' => 'Métier',
                        'title' => 'Un périmètre déjà identifiable',
                        'content' => 'Les routes et contrôleurs existants montrent déjà les grands blocs fonctionnels : authentification, utilisateurs, gestion des dossiers, rendez vous, interactions liées aux dossiers et notifications.',
                    ],
                    [
                        'label' => 'Avancement',
                        'title' => 'Un socle en place pour faire grandir le produit',
                        'content' => "L application n est pas encore finalisée, mais elle dispose déjà d un vocabulaire cohérent, d une structure technique propre et d un découpage qui facilitera la suite du développement.",
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
                                'description' => "Endpoints de login, logout, refresh et inscription sur l API Symfony.",
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
                                'title' => 'Rendez vous et notifications',
                                'description' => 'Endpoints dédiés aux appointments et aux notifications email ou SMS.',
                            ],
                        ],
                    ],
                ],
                'outcomes' => [
                    'eyebrow' => 'Valeur',
                    'title' => 'Ce que le socle apporte déjà',
                    'items' => [
                        ['label' => 'Clarté produit', 'value' => 'Un vocabulaire métier cohérent partagé par le front et l API'],
                        ['label' => 'Évolutivité', 'value' => 'Une architecture qui accepte les itérations futures sans se contorsionner'],
                        ['label' => 'Lisibilité', 'value' => 'Des blocs fonctionnels déjà séparés au lieu d un monolithe flou'],
                    ],
                ],
                'stack_details' => [
                    'eyebrow' => 'Base technique',
                    'title' => 'Une stack pensée pour un produit amené à grandir',
                    'items' => [
                        ['name' => 'Symfony 7 + API Platform', 'role' => 'API structurée, exposition des ressources et cadre métier sécurisé.'],
                        ['name' => 'Doctrine ORM', 'role' => 'Modélisation des objets métier et persistance des données.'],
                        ['name' => 'React 19 + Vite', 'role' => 'Interface dédiée, itérable rapidement, sans alourdir le back.'],
                        ['name' => 'JWT + Axios', 'role' => 'Gestion des échanges authentifiés entre le front et l API.'],
                    ],
                ],
                'links' => [],
                'next_steps' => [
                    'eyebrow' => 'Suite du projet',
                    'title' => 'Les prochaines étapes naturelles',
                    'items' => [
                        [
                            'title' => 'Stabiliser les parcours métier principaux',
                            'description' => 'Rendre les flux dossier, interaction et rendez vous vraiment utilisables de bout en bout.',
                        ],
                        [
                            'title' => 'Affiner les rôles et permissions',
                            'description' => 'Sécuriser les accès selon les profils et clarifier les responsabilités fonctionnelles.',
                        ],
                        [
                            'title' => 'Renforcer les retours utilisateurs',
                            'description' => 'Faire évoluer le produit à partir des usages réels plutôt qu uniquement depuis la technique.',
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
                'summary' => "Une suite d'outils pensée pour accélérer le travail sur des projets PHP tout en apportant des capacités d audit, d analyse et de sécurisation.",
                'problem' => 'Les besoins de sécurité, d inspection technique et d automatisation sont souvent dispersés entre plusieurs outils ou scripts ponctuels.',
                'challenge' => 'Rendre des sujets techniques parfois arides plus lisibles, plus centralisés et plus actionnables dans un seul environnement.',
                'solution' => "Le projet regroupe des outils de hash, de token, d analyse d architecture, d audit web, de scan de vulnérabilités et de gestion multi projets dans une interface unifiée.",
                'result' => 'Le socle actuel montre déjà un produit modulaire, orienté usage réel, capable de servir à la fois la sécurité et la productivité de développement.',
                'hero' => [
                    'eyebrow' => 'Dev tools + securite',
                    'headline' => 'Transformer une boîte à outils technique en véritable cockpit de travail.',
                    'intro' => 'La valeur ne vient pas seulement des scans ou des utilitaires, mais de leur mise en cohérence dans un même environnement de lecture et d action.',
                ],
                'facts' => [
                    ['label' => 'Positionnement', 'value' => 'Dev tools + sécurité'],
                    ['label' => 'Statut', 'value' => 'Produit en construction'],
                    ['label' => 'Valeur', 'value' => 'Centraliser audits et workflow'],
                    ['label' => 'Public', 'value' => 'Développement PHP multi projets'],
                ],
                'before_after' => [
                    'eyebrow' => 'Avant / apres',
                    'title' => 'Réunir ce qui est souvent éclaté entre plusieurs outils',
                    'before' => [
                        'label' => 'Avant',
                        'text' => 'Les audits, checks, scans et informations projet vivent souvent dans des scripts isolés ou des commandes sans restitution homogène.',
                    ],
                    'after' => [
                        'label' => 'Après',
                        'text' => 'Le produit vise un point d entrée unique pour lancer des analyses, lire des rapports et piloter plusieurs projets plus efficacement.',
                    ],
                ],
                'constraints' => [
                    'eyebrow' => 'Contraintes',
                    'title' => 'Les défis propres à un produit outillage',
                    'items' => [
                        [
                            'title' => 'Ne pas devenir un simple agrégateur',
                            'description' => 'Il faut créer de la valeur dans la lecture, la synthèse et les actions possibles, pas seulement exposer des commandes.',
                        ],
                        [
                            'title' => 'Composer avec des sources variées',
                            'description' => 'Sécurité, dépendances, architecture et état des projets ne parlent pas naturellement le même langage.',
                        ],
                        [
                            'title' => 'Rester utile en conditions réelles',
                            'description' => "L outil doit aider au quotidien, pas uniquement lors de démonstrations ou d audits exceptionnels.",
                        ],
                    ],
                ],
                'decisions' => [
                    'eyebrow' => 'Decisions cles',
                    'title' => 'Ce qui donne sa cohérence au produit',
                    'items' => [
                        [
                            'title' => 'Penser le produit comme un cockpit',
                            'description' => 'La navigation multi projets et les vues de synthèse servent autant que les scans eux mêmes.',
                        ],
                        [
                            'title' => 'Miser sur une restitution lisible',
                            'description' => 'Rapports, tableaux de bord et vues consolidées transforment des sorties techniques en matière exploitable.',
                        ],
                        [
                            'title' => 'Croiser sécurité et productivité',
                            'description' => 'Le produit couvre à la fois des sujets de contrôle, de maintenance et de pilotage technique quotidien.',
                        ],
                    ],
                ],
                'delivery' => [
                    'eyebrow' => 'Modules reperes',
                    'title' => 'Les briques déjà visibles dans le produit',
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
                            'title' => 'Gestion multi projets',
                            'description' => 'Inventaire des projets, statuts Git, DDEV et actions rapides centralisées.',
                        ],
                    ],
                ],
                'sections' => [
                    [
                        'label' => 'Concept',
                        'title' => 'Une boîte à outils pensée comme un cockpit de travail',
                        'content' => "L idée n est pas seulement d additionner des petits utilitaires, mais de proposer un environnement unique pour consulter ses projets, lancer des analyses et récupérer des sorties directement exploitables.",
                    ],
                    [
                        'label' => 'Sécurité',
                        'title' => 'Des outils d inspection et de contrôle intégrés',
                        'content' => "Le projet embarque déjà des briques pour le hash bcrypt, les tokens, l audit web passif, le scan de ports, l analyse de vulnérabilités Composer ou npm et la restitution de rapports lisibles.",
                    ],
                    [
                        'label' => 'Productivité',
                        'title' => 'Un support direct au travail quotidien sur plusieurs projets',
                        'content' => 'La gestion multi projets, les rapports d architecture, les itérations, les essais ou les intégrations DDEV montrent une volonté claire de relier outillage technique et usage concret de développement.',
                    ],
                    [
                        'label' => 'Différenciation',
                        'title' => 'Transformer des analyses brutes en sorties compréhensibles',
                        'content' => "Une partie de la valeur vient de la restitution : rapports, tableaux de bord, synthèses et vues d ensemble rendent des informations techniques plus accessibles et plus utiles à la prise de décision.",
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
                                'title' => 'Gestion multi projets',
                                'description' => 'Inventaire des projets, statuts Git, DDEV et actions rapides centralisées.',
                            ],
                        ],
                    ],
                ],
                'outcomes' => [
                    'eyebrow' => 'Promesse',
                    'title' => 'La valeur recherchée pour les équipes techniques',
                    'items' => [
                        ['label' => 'Centralisation', 'value' => 'Moins de dispersion entre scripts, rapports et commandes'],
                        ['label' => 'Lisibilité', 'value' => 'Des résultats techniques mieux présentés et plus actionnables'],
                        ['label' => 'Pilotage', 'value' => 'Une meilleure vision transverse sur plusieurs projets PHP'],
                    ],
                ],
                'stack_details' => [
                    'eyebrow' => 'Base technique',
                    'title' => 'Une stack au service de l analyse et de la restitution',
                    'items' => [
                        ['name' => 'PHP + Twig', 'role' => 'Socle simple pour assembler les modules et restituer les rapports.'],
                        ['name' => 'Composer audit / npm audit', 'role' => 'Sources d information utiles pour la détection de vulnérabilités.'],
                        ['name' => 'DDEV', 'role' => 'Facilite les opérations et les intégrations sur plusieurs projets.'],
                        ['name' => 'Rapports HTML + CLI', 'role' => 'Restitution visuelle et exécution technique dans un même produit.'],
                    ],
                ],
                'links' => [],
                'next_steps' => [
                    'eyebrow' => 'Suite du projet',
                    'title' => 'Les prolongements les plus prometteurs',
                    'items' => [
                        [
                            'title' => 'Renforcer la lecture consolidée des audits',
                            'description' => 'Comparer, prioriser et historiser les signaux remontés par différents modules.',
                        ],
                        [
                            'title' => 'Affiner le pilotage multi projets',
                            'description' => 'Offrir une vue encore plus opérationnelle des états Git, DDEV et dépendances.',
                        ],
                        [
                            'title' => 'Transformer davantage de sorties en actions',
                            'description' => 'Relier les analyses à des décisions ou commandes rapides directement depuis l interface.',
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
