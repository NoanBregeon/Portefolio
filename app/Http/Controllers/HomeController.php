<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Données en dur pour les projets (Aperçu sur l'accueil)
        $featuredProjects = [
            (object) [
                'title' => 'Gestionnaire de Tâches API',
                'slug' => 'task-manager-api',
                'description' => 'Projet de groupe. API RESTful sécurisée avec Sanctum pour la gestion de tâches collaboratives.',
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

        return view('home', compact('featuredProjects'));
    }
}
