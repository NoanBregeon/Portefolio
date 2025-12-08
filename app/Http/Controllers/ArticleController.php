<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private function getArticles()
    {
        return collect([
            (object) [
                'id' => 1,
                'title' => 'Pourquoi Laravel 12 est incroyable',
                'slug' => 'pourquoi-laravel-12',
                'excerpt' => 'Découvrez les nouvelles fonctionnalités de Laravel 12 et comment elles améliorent la productivité.',
                'content' => '<p>Laravel 12 apporte son lot de nouveautés...</p>',
                'thumbnail' => 'images/articles/laravel12.jpg',
                'published_at' => now()->subWeek(),
            ],
            (object) [
                'id' => 2,
                'title' => 'Comprendre l\'injection de dépendances',
                'slug' => 'injection-dependances',
                'excerpt' => 'Un guide simple pour comprendre le Service Container de Laravel.',
                'content' => '<p>L\'injection de dépendances est un pattern essentiel...</p>',
                'thumbnail' => 'images/articles/di.jpg',
                'published_at' => now()->subMonth(),
            ],
        ]);
    }

    public function index()
    {
        $articles = $this->getArticles(); // Pas de pagination pour l'instant si peu d'articles
        return view('articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = $this->getArticles()->firstWhere('slug', $slug);

        if (!$article) {
            abort(404);
        }

        return view('articles.show', compact('article'));
    }
}
