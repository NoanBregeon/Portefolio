<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Helper pour récupérer le code source d'un fichier
    private function getProjectCode($slug)
    {
        $path = public_path("images/projects/{$slug}");

        if (is_dir($path)) {
            $files = \Illuminate\Support\Facades\File::files($path);
            foreach ($files as $file) {
                // On cherche un fichier qui commence par "code." ou "snippet."
                // Ex: code.php, snippet.js, code.cs
                $filename = $file->getFilename();
                if (str_starts_with($filename, 'code.') || str_starts_with($filename, 'snippet.')) {
                    return (object)[
                        'content' => \Illuminate\Support\Facades\File::get($file->getPathname()),
                        'language' => $file->getExtension(),
                        'filename' => $filename
                    ];
                }
            }
        }

        return null;
    }

    public function index()
    {
        $projects = Project::with('categories', 'images')
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        return view('projects.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::with('categories', 'images')
            ->where('slug', $slug)
            ->firstOrFail();

        // Chargement dynamique du code snippet
        $codeData = $this->getProjectCode($project->slug);
        if ($codeData) {
            $project->code_snippet = $codeData->content;
            $project->code_language = $codeData->language;
            $project->code_filename = $codeData->filename;
        }

        return view('projects.show', compact('project'));
    }
}

