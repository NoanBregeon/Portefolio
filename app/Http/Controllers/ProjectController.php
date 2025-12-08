<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('categories')->latest('published_at')->paginate(9);
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        $project->load(['categories', 'images']);
        return view('projects.show', compact('project'));
    }
}
