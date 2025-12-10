<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Helper pour récupérer automatiquement les images d'un dossier
    private function getProjectImages($slug)
    {
        $images = [];
        $path = public_path("images/projects/{$slug}");

        if (is_dir($path)) {
            $files = \Illuminate\Support\Facades\File::files($path);
            foreach ($files as $file) {
                // On accepte jpg, png, webp, etc.
                if (in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
                    $images[] = (object)[
                        'image_path' => "images/projects/{$slug}/" . $file->getFilename()
                    ];
                }
            }
        }

        return $images;
    }

    // Helper pour récupérer le code source d'un fichier
    private function getProjectCode($slug)
    {
        $path = public_path("images/projects/{$slug}");

        if (is_dir($path)) {
            $files = \Illuminate\Support\Facades\File::files($path);
            foreach ($files as $file) {
                // On cherche un fichier qui commence par "code." ou "snippet."
                // Ex: code.php, snippet.js, code.cs
                $filename = $file->getFilename();
                if (str_starts_with($filename, 'code.') || str_starts_with($filename, 'snippet.')) {
                    return (object)[
                        'content' => \Illuminate\Support\Facades\File::get($file->getPathname()),
                        'language' => $file->getExtension(),
                        'filename' => $filename
                    ];
                }
            }
        }

        return null;
    }

    // Définition des projets en dur (simule une base de données)
    private function getProjects()
    {
        return collect([
            (object) [
                'id' => 1,
                'title' => 'Portfolio Personnel',
                'slug' => 'portfolio-personnel',
                'description' => 'Site complet avec pages : Accueil, À propos, Projets, Contact. Thème 3D cosmique, animations UI, design moderne.',
                'content' => '<p>Site complet développé avec Laravel 12 et Tailwind CSS.</p>
                              <h3>Points clés :</h3>
                              <ul>
                                <li>Thème 3D cosmique avec Three.js</li>
                                <li>Animations UI fluides (GSAP/Alpine)</li>
                                <li>Structure MVC propre</li>
                                <li>Formulaire de contact fonctionnel</li>
                              </ul>
                              <p>Une architecture nette pour la mise en valeur de mes compétences.</p>',
                // 'code_snippet' => "...", // Supprimé car géré dynamiquement
                'thumbnail' => 'images/projects/portfolio.jpg',
                'url_repo' => 'https://github.com/NoanBregeon/portfolio',
                'url_demo' => route('home'),
                'categories' => [
                    (object)['name' => 'Laravel 12'],
                    (object)['name' => 'Tailwind'],
                    (object)['name' => 'Three.js']
                ],
                'images' => $this->getProjectImages('portfolio-personnel'),
                'published_at' => now(),
            ],

            (object) [
                'id' => 3,
                'title' => 'Gestionnaire de Tâches — API REST',
                'slug' => 'task-manager-api',
                'description' => 'Projet de groupe (Méthode Agile). API REST sécurisée avec Sanctum. Endpoints CRUD utilisateurs / tâches.',
                'content' => '<p>Projet réalisé en équipe dans le cadre de l\'apprentissage de la méthode Agile (Scrum).</p>
                              <h3>Contexte et Objectifs :</h3>
                              <ul>
                                <li>Travail collaboratif avec répartition des tâches</li>
                                <li>Application des rituels Agile (Daily, Sprint Planning)</li>
                                <li>API REST sécurisée avec Laravel Sanctum</li>
                                <li>Endpoints CRUD pour utilisateurs et tâches</li>
                              </ul>
                              <p>Une expérience concrète du développement en équipe et de la gestion de projet.</p>',
                'thumbnail' => 'images/projects/api.jpg',
                'url_repo' => 'https://github.com/Jules-pecquereau/methode_agile_app',
                'url_demo' => null,
                'categories' => [
                    (object)['name' => 'API REST'],
                    (object)['name' => 'Sanctum'],
                    (object)['name' => 'Backend']
                ],
                'images' => $this->getProjectImages('task-manager-api'),
                'published_at' => now()->subMonths(2),
            ],
            (object) [
                'id' => 6,
                'title' => 'App E6 — Client Léger (Laravel)',
                'slug' => 'app-e6-client-leger',
                'description' => 'Drive + logiciel de caisse. Gestion produits, Panier, Tickets, CRUD complet. Auth.',
                'content' => '<p>Partie Web du projet E6 : solution complète de Drive et Caisse.</p>
                              <h3>Modules :</h3>
                              <ul>
                                <li>Gestion des produits et stocks</li>
                                <li>Panier et prise de commande</li>
                                <li>Génération de tickets</li>
                                <li>Authentification et rôles</li>
                              </ul>
                              <p>Architecture modulable et API partagée avec le client lourd C#.</p>',
                'thumbnail' => 'images/projects/e6-web.jpg',
                'url_repo' => 'https://github.com/NoanBregeon/Epreuve_E6_Legere',
                'url_demo' => null,
                'categories' => [
                    (object)['name' => 'Laravel'],
                    (object)['name' => 'E6'],
                    (object)['name' => 'Fullstack']
                ],
                'images' => $this->getProjectImages('app-e6-client-leger'),
                'published_at' => now()->subMonths(5),
            ],
            (object) [
                'id' => 7,
                'title' => 'App E6 — Client Lourd (C#)',
                'slug' => 'app-e6-client-lourd',
                'description' => 'Gestion Drive / Caisse. Gestion stock, réserve, préparation paniers. Connexion MariaDB.',
                'content' => '<p>Application Desktop développée en C# (WPF/WinForms) pour la gestion interne.</p>
                              <h3>Fonctionnalités :</h3>
                              <ul>
                                <li>Gestion du stock et des articles en réserve</li>
                                <li>Préparation des paniers commandés sur le site</li>
                                <li>Connexion directe à la base MariaDB partagée</li>
                                <li>POO propre et SQL structuré</li>
                              </ul>
                              <p>Complément indispensable du client léger Laravel pour le dossier E6.</p>',
                'thumbnail' => 'images/projects/e6-desktop.jpg',
                'url_repo' => 'https://github.com/NoanBregeon/application_lourde',
                'url_demo' => null,
                'categories' => [
                    (object)['name' => 'C#'],
                    (object)['name' => '.NET'],
                    (object)['name' => 'MariaDB']
                ],
                'images' => $this->getProjectImages('app-e6-client-lourd'),
                'published_at' => now()->subMonths(5),
            ],
            (object) [
                'id' => 9,
                'title' => 'Bot Discord Avancé',
                'slug' => 'bot-discord-js',
                'description' => 'Système de salons vocaux temporaires, permissions dynamiques, logs, architecture modulaire.',
                'content' => '<p>Bot Discord professionnel développé avec Discord.js et Node.js.</p>
                              <h3>Fonctionnalités majeures :</h3>
                              <ul>
                                <li>Système de salons vocaux temporaires (Join to Create)</li>
                                <li>Gestion dynamique des permissions</li>
                                <li>Nettoyage automatique des channels</li>
                                <li>Logs détaillés des évènements vocaux</li>
                              </ul>
                              <p>Architecture modulaire avec handlers d\'événements et de commandes.</p>',
                'thumbnail' => 'images/projects/discord-bot.jpg',
                'url_repo' => 'https://github.com/NoanBregeon/discord-bot',
                'url_demo' => null,
                'categories' => [
                    (object)['name' => 'Node.js'],
                    (object)['name' => 'Discord.js'],
                    (object)['name' => 'Bot'],
                    (object)['name' => 'API Twitch']
                ],
                'images' => $this->getProjectImages('bot-discord-js'),
                'published_at' => now()->subMonths(3),
            ],
            (object) [
                'id' => 10,
                'title' => 'Bot Twitch & Overlays',
                'slug' => 'bot-twitch-overlays',
                'description' => 'Widget Followers/Subs, Roue des subs avec bonus/malus, Intégration API Twitch.',
                'content' => '<p>Outils d\'interaction et d\'habillage pour le streaming sur Twitch.</p>
                              <h3>Modules développés :</h3>
                              <ul>
                                <li>Widgets personnalisés pour Followers et Subs</li>
                                <li>Style unifié pour une cohérence visuelle (Overlay)</li>
                                <li>Système de roue des subs avec bonus/malus</li>
                                <li>Interaction temps réel avec l\'API Twitch</li>
                              </ul>
                              <p>Utilisé en production sur le flux du streamer "Lyubaw / MrLyu_".</p>',
                'thumbnail' => 'images/projects/twitch-bot.jpg',
                'url_repo' => 'https://github.com/NoanBregeon/twitch-overlay',
                'url_demo' => 'https://twitch.tv/mrlyu_',
                'categories' => [
                    (object)['name' => 'Node.js'],
                    (object)['name' => 'Twitch API'],
                    (object)['name' => 'Frontend']
                ],
                'images' => $this->getProjectImages('bot-twitch-overlays'),
                'published_at' => now()->subMonths(2),
            ],
        ])->map(function ($project) {
            // Si la miniature définie n'existe pas, on essaie de prendre la première image de la galerie
            if (!file_exists(public_path($project->thumbnail)) && !empty($project->images)) {
                // On prend la première image trouvée
                $firstImage = $project->images[0];
                $project->thumbnail = $firstImage->image_path;
            }

            // Chargement dynamique du code snippet
            $codeData = $this->getProjectCode($project->slug);
            if ($codeData) {
                $project->code_snippet = $codeData->content;
                $project->code_language = $codeData->language;
                $project->code_filename = $codeData->filename;
            }

            return $project;
        });
    }

    public function index()
    {
        // Pagination manuelle sur la collection
        $page = request()->get('page', 1);
        $perPage = 9;
        $projects = $this->getProjects()->forPage($page, $perPage);

        // Création d'un paginator manuel pour la vue
        $projects = new \Illuminate\Pagination\LengthAwarePaginator(
            $projects,
            $this->getProjects()->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('projects.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = $this->getProjects()->firstWhere('slug', $slug);

        if (!$project) {
            abort(404);
        }

        return view('projects.show', compact('project'));
    }
}
