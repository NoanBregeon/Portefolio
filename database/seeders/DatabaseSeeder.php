<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Category;
use App\Models\ProjectImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create Admin User
        User::create([
            'name' => 'Admin',
            'email' => 'admin@portfolio.com',
            'password' => Hash::make('password'), // Default password
        ]);

        $projects = [
            [
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
                'thumbnail' => 'images/projects/portfolio.jpg',
                'url_repo' => 'https://github.com/NoanBregeon/portfolio',
                'url_demo' => route('home'),
                'categories' => ['Laravel 12', 'Tailwind', 'Three.js'],
                'published_at' => now(),
            ],
            [
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
                'categories' => ['API REST', 'Sanctum', 'Backend'],
                'published_at' => now()->subMonths(2),
            ],
            [
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
                'categories' => ['Laravel', 'E6', 'Fullstack'],
                'published_at' => now()->subMonths(5),
            ],
            [
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
                'categories' => ['C#', '.NET', 'MariaDB'],
                'published_at' => now()->subMonths(5),
            ],
            [
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
                'categories' => ['Node.js', 'Discord.js', 'Bot', 'API Twitch'],
                'published_at' => now()->subMonths(4),
            ],
            [
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
                'categories' => ['Node.js', 'Twitch API', 'Frontend'],
                'published_at' => now()->subMonths(2),
            ],
        ];

        foreach ($projects as $data) {
            $categories = $data['categories'];
            unset($data['categories']);

            $project = Project::create($data);

            foreach ($categories as $catName) {
                $category = Category::firstOrCreate(
                    ['slug' => Str::slug($catName)],
                    ['name' => $catName]
                );
                $project->categories()->attach($category->id);
            }

            // Scan for images in public/images/projects/{slug}
            $path = public_path("images/projects/{$project->slug}");
            if (is_dir($path)) {
                $files = \Illuminate\Support\Facades\File::files($path);
                foreach ($files as $file) {
                    if (in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
                        ProjectImage::create([
                            'project_id' => $project->id,
                            'image_path' => "images/projects/{$project->slug}/" . $file->getFilename()
                        ]);
                    }
                }
            }
        }
    }
}
