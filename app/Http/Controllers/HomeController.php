<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer les projets mis en avant
        $featuredProjects = Project::with('categories')
            ->where('is_featured', true)
            ->get();

        // Si plus de 3 projets sont mis en avant, en prendre 3 au hasard
        if ($featuredProjects->count() > 3) {
            $featuredProjects = $featuredProjects->random(3);
        }

        // Si aucun projet n'est mis en avant, prendre les 3 derniers publiés
        if ($featuredProjects->isEmpty()) {
            $featuredProjects = Project::with('categories')
                ->orderBy('published_at', 'desc')
                ->take(3)
                ->get();
        }

        return view('home', compact('featuredProjects'));
    }
}
