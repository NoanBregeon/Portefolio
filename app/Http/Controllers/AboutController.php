<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Experience;

class AboutController extends Controller
{
    public function index()
    {
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

        // Fetch dynamic content from database
        $aboutText = Setting::where('key', 'about_introduction')->first()->value ?? 'Texte de présentation par défaut. Modifiez-le dans le tableau de bord admin.';
        $experiences = Experience::orderBy('order', 'asc')->orderBy('start_date', 'desc')->get();

        return view('about', compact('skills', 'aboutText', 'experiences'));
    }
}
