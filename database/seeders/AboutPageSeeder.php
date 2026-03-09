<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Setting;
use App\Models\Experience;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Setting: Text intro
        Setting::updateOrCreate(
            ['key' => 'about_introduction'],
            ['value' => '<p class="mb-4">
    Passionné par le développement informatique, j\'ai suivi un parcours en <strong>BTS SIO option SLAM</strong> (Solutions Logicielles et Applications Métiers). Mon objectif est de concevoir des solutions robustes et efficaces.
</p>
<p class="mb-4">
    Je suis particulièrement à l\'aise avec l\'écosystème <strong>Laravel</strong> pour le web et <strong>C#</strong> pour le développement applicatif lourd. J\'accorde une grande importance à la qualité du code, à la sécurité et aux bonnes pratiques (MVC, SOLID).
</p>
<p class="mb-6">
    Actuellement à la recherche d\'une <strong>alternance</strong> ou d\'un <strong>premier poste</strong> en tant que développeur web ou applicatif, je suis prêt à relever de nouveaux défis techniques.
</p>']
        );

        // 2. Experiences
        Experience::updateOrCreate(
            ['title' => 'BTS SIO SLAM', 'company' => 'IIA Saint-Nazaire'],
            [
                'description' => 'Spécialisation développement logiciel et web.',
                'start_date' => null,
                'end_date' => null,
                'icon' => 'bg-indigo-900',
                'order' => 1
            ]
        );

        Experience::updateOrCreate(
            ['title' => 'Expérience Terrain', 'company' => 'Hyper U'],
            [
                'description' => 'Stage et emploi étudiant. Rigueur et contact client.',
                'start_date' => null,
                'end_date' => null,
                'icon' => 'bg-gray-700',
                'order' => 2
            ]
        );
    }
}
