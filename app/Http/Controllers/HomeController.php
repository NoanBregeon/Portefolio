<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Données en dur pour les compétences
        $skills = [
            'Backend' => [
                ['name' => 'Laravel', 'proficiency' => 90, 'icon' => 'fa-brands fa-laravel'],
                ['name' => 'PHP 8.4', 'proficiency' => 85, 'icon' => 'fa-brands fa-php'],
                ['name' => 'MySQL / MariaDB', 'proficiency' => 80, 'icon' => 'fa-solid fa-database'],
                ['name' => 'PostgreSQL', 'proficiency' => 70, 'icon' => 'fa-solid fa-server'],
            ],
            'Frontend' => [
                ['name' => 'TailwindCSS', 'proficiency' => 95, 'icon' => 'fa-brands fa-css3'],
                ['name' => 'JavaScript (ES6+)', 'proficiency' => 75, 'icon' => 'fa-brands fa-js'],
                ['name' => 'Blade Templating', 'proficiency' => 90, 'icon' => 'fa-brands fa-html5'],
                ['name' => 'Alpine.js', 'proficiency' => 60, 'icon' => 'fa-brands fa-js'],
            ],
            'Outils & DevOps' => [
                ['name' => 'Git / GitHub', 'proficiency' => 85, 'icon' => 'fa-brands fa-git-alt'],
                ['name' => 'Docker', 'proficiency' => 60, 'icon' => 'fa-brands fa-docker'],
                ['name' => 'VS Code', 'proficiency' => 95, 'icon' => 'fa-solid fa-code'],
                ['name' => 'Composer / NPM', 'proficiency' => 80, 'icon' => 'fa-solid fa-terminal'],
            ]
        ];

        // Données en dur pour les projets (Aperçu sur l'accueil)
        $projects = [
            (object) [
                'title' => 'E-Commerce Laravel',
                'slug' => 'e-commerce-laravel',
                'description' => 'Une plateforme e-commerce complète avec gestion de panier, paiement Stripe et panel admin.',
                'thumbnail' => 'images/projects/ecommerce.jpg', // Assurez-vous d'avoir une image ici ou null
                'categories' => [
                    (object)['name' => 'Laravel'],
                    (object)['name' => 'Stripe']
                ],
                'published_at' => now()->subMonth(),
            ],
            (object) [
                'title' => 'Gestionnaire de Tâches API',
                'slug' => 'task-manager-api',
                'description' => 'API RESTful sécurisée avec Sanctum pour la gestion de tâches collaboratives.',
                'thumbnail' => 'images/projects/api.jpg',
                'categories' => [
                    (object)['name' => 'API'],
                    (object)['name' => 'Vue.js']
                ],
                'published_at' => now()->subMonths(2),
            ],
            (object) [
                'title' => 'Portfolio Personnel',
                'slug' => 'portfolio-perso',
                'description' => 'Le site sur lequel vous naviguez actuellement. Design moderne et responsive.',
                'thumbnail' => 'images/projects/portfolio.jpg',
                'categories' => [
                    (object)['name' => 'Tailwind'],
                    (object)['name' => 'Design']
                ],
                'published_at' => now()->subDays(5),
            ],
        ];

        return view('home', compact('projects', 'skills'));
    }
}
