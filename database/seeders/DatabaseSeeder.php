<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Mot de passe par défaut
        ]);

        // Categories
        $categories = Category::factory(5)->create();

        // Projects with categories
        Project::factory(6)->create()->each(function ($project) use ($categories) {
            $project->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

        // Skills
        Skill::factory(10)->create();

        // Articles
        Article::factory(5)->create();
    }
}
