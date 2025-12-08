<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::with('categories')->latest('published_at')->take(3)->get();
        $skills = Skill::all()->groupBy('category');

        return view('home', compact('projects', 'skills'));
    }
}
