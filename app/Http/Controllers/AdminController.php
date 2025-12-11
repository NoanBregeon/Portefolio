<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        $projects = Project::with('categories')->orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('projects'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.projects.form', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'url_repo' => 'nullable|url',
            'url_demo' => 'nullable|url',
            'categories' => 'array',
            'new_categories' => 'nullable|string', // Comma separated
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_featured' => 'boolean',
        ]);

        $slug = Str::slug($validated['title']);
        $count = Project::where('slug', 'like', "$slug%")->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }

        $project = new Project($validated);
        $project->slug = $slug;
        $project->published_at = now();
        $project->is_featured = $request->has('is_featured');

        // Handle Thumbnail
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = 'thumb_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path("images/projects/{$slug}");
            if (!File::exists($path)) {
                File::makeDirectory($path, 0755, true);
            }
            $file->move($path, $filename);
            $project->thumbnail = "images/projects/{$slug}/{$filename}";
        }

        $project->save();

        // Handle Categories
        $categoryIds = $request->input('categories', []);

        // Handle New Categories
        if ($request->filled('new_categories')) {
            $newCats = explode(',', $request->input('new_categories'));
            foreach ($newCats as $catName) {
                $catName = trim($catName);
                if ($catName) {
                    $category = Category::firstOrCreate(
                        ['slug' => Str::slug($catName)],
                        ['name' => $catName]
                    );
                    $categoryIds[] = $category->id;
                }
            }
        }

        $project->categories()->sync($categoryIds);

        // Handle Gallery Images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $path = public_path("images/projects/{$slug}");
                if (!File::exists($path)) {
                    File::makeDirectory($path, 0755, true);
                }
                $image->move($path, $filename);

                ProjectImage::create([
                    'project_id' => $project->id,
                    'image_path' => "images/projects/{$slug}/{$filename}"
                ]);
            }
        }

        return redirect()->route('admin.dashboard')->with('success', 'Projet créé avec succès.');
    }

    public function edit(Project $project)
    {
        $categories = Category::all();
        return view('admin.projects.form', compact('project', 'categories'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'url_repo' => 'nullable|url',
            'url_demo' => 'nullable|url',
            'categories' => 'array',
            'new_categories' => 'nullable|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_featured' => 'boolean',
        ]);

        $project->fill($validated);
        $project->is_featured = $request->has('is_featured');

        // Handle Thumbnail
        if ($request->hasFile('thumbnail')) {
            // Delete old thumbnail if exists
            if ($project->thumbnail && File::exists(public_path($project->thumbnail))) {
                File::delete(public_path($project->thumbnail));
            }

            $file = $request->file('thumbnail');
            $filename = 'thumb_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path("images/projects/{$project->slug}");
            if (!File::exists($path)) {
                File::makeDirectory($path, 0755, true);
            }
            $file->move($path, $filename);
            $project->thumbnail = "images/projects/{$project->slug}/{$filename}";
        }

        $project->save();

        // Handle Categories
        $categoryIds = $request->input('categories', []);
        if ($request->filled('new_categories')) {
            $newCats = explode(',', $request->input('new_categories'));
            foreach ($newCats as $catName) {
                $catName = trim($catName);
                if ($catName) {
                    $category = Category::firstOrCreate(
                        ['slug' => Str::slug($catName)],
                        ['name' => $catName]
                    );
                    $categoryIds[] = $category->id;
                }
            }
        }
        $project->categories()->sync($categoryIds);

        // Handle Gallery Images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $path = public_path("images/projects/{$project->slug}");
                if (!File::exists($path)) {
                    File::makeDirectory($path, 0755, true);
                }
                $image->move($path, $filename);

                ProjectImage::create([
                    'project_id' => $project->id,
                    'image_path' => "images/projects/{$project->slug}/{$filename}"
                ]);
            }
        }

        return redirect()->route('admin.dashboard')->with('success', 'Projet mis à jour.');
    }

    public function destroy(Project $project)
    {
        // Delete images folder
        $path = public_path("images/projects/{$project->slug}");
        if (File::exists($path)) {
            File::deleteDirectory($path);
        }

        $project->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Projet supprimé.');
    }

    public function deleteImage($id)
    {
        $image = ProjectImage::findOrFail($id);
        if (File::exists(public_path($image->image_path))) {
            File::delete(public_path($image->image_path));
        }
        $image->delete();
        return back()->with('success', 'Image supprimée.');
    }
}
