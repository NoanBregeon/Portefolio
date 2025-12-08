<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Définition des projets en dur (simule une base de données)
    private function getProjects()
    {
        return collect([
            (object) [
                'id' => 1,
                'title' => 'E-Commerce Laravel',
                'slug' => 'e-commerce-laravel',
                'description' => 'Une plateforme e-commerce complète avec gestion de panier, paiement Stripe et panel admin.',
                'content' => '<p>Ce projet est une solution e-commerce complète développée en Laravel 11.</p>
                              <h3>Fonctionnalités principales :</h3>
                              <ul>
                                <li>Catalogue produits avec filtres</li>
                                <li>Panier et commande (Stripe)</li>
                                <li>Back-office administrateur</li>
                                <li>Gestion des stocks</li>
                              </ul>
                              <p>Le design est réalisé avec TailwindCSS pour une compatibilité mobile parfaite.</p>',
                'thumbnail' => 'images/projects/ecommerce.jpg',
                'url_repo' => 'https://github.com/mon-profil/ecommerce',
                'url_demo' => 'https://ecommerce-demo.test',
                'categories' => [
                    (object)['name' => 'Laravel'],
                    (object)['name' => 'Stripe'],
                    (object)['name' => 'MySQL']
                ],
                'images' => [
                    (object)['image_path' => 'images/projects/ecommerce-1.jpg'],
                    (object)['image_path' => 'images/projects/ecommerce-2.jpg'],
                ],
                'published_at' => now()->subMonth(),
            ],
            (object) [
                'id' => 2,
                'title' => 'Gestionnaire de Tâches API',
                'slug' => 'task-manager-api',
                'description' => 'API RESTful sécurisée avec Sanctum pour la gestion de tâches collaboratives.',
                'content' => '<p>Développement d\'une API REST robuste pour une application mobile de gestion de tâches.</p>
                              <p>Authentification via Laravel Sanctum, documentation via Swagger/OpenAPI.</p>',
                'thumbnail' => 'images/projects/api.jpg',
                'url_repo' => 'https://github.com/mon-profil/task-api',
                'url_demo' => null,
                'categories' => [
                    (object)['name' => 'API'],
                    (object)['name' => 'Sanctum'],
                    (object)['name' => 'PostgreSQL']
                ],
                'images' => [],
                'published_at' => now()->subMonths(2),
            ],
            (object) [
                'id' => 3,
                'title' => 'Portfolio Personnel',
                'slug' => 'portfolio-perso',
                'description' => 'Le site sur lequel vous naviguez actuellement. Design moderne et responsive.',
                'content' => '<p>Création de mon portfolio professionnel pour présenter mes compétences et projets.</p>
                              <p>Utilisation de la stack TALL (Tailwind, Alpine, Laravel, Livewire) ou équivalent.</p>',
                'thumbnail' => 'images/projects/portfolio.jpg',
                'url_repo' => 'https://github.com/mon-profil/portfolio',
                'url_demo' => 'https://mon-portfolio.test',
                'categories' => [
                    (object)['name' => 'Tailwind'],
                    (object)['name' => 'Blade'],
                    (object)['name' => 'Design']
                ],
                'images' => [],
                'published_at' => now()->subDays(5),
            ],
            (object) [
                'id' => 4,
                'title' => 'Application de Chat en Temps Réel',
                'slug' => 'chat-realtime',
                'description' => 'Chat utilisant Laravel Reverb (Websockets) pour des communications instantanées.',
                'content' => '<p>Mise en place d\'un serveur Websocket avec Laravel Reverb.</p>',
                'thumbnail' => 'images/projects/chat.jpg',
                'url_repo' => 'https://github.com/mon-profil/chat',
                'url_demo' => null,
                'categories' => [
                    (object)['name' => 'Websockets'],
                    (object)['name' => 'Vue.js'],
                    (object)['name' => 'Redis']
                ],
                'images' => [],
                'published_at' => now()->subMonths(4),
            ],
        ]);
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
