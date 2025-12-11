<x-public-layout>
    <div class="pt-24 pb-12 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-white mb-8">{{ isset($project) ? 'Modifier le projet' : 'Nouveau projet' }}</h1>

        @if($errors->any())
            <div class="bg-red-600 text-white p-4 rounded mb-6">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ isset($project) ? route('admin.projects.update', $project) : route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="bg-gray-800 p-6 rounded-lg border border-gray-700 space-y-6">
            @csrf
            @if(isset($project)) @method('PUT') @endif

            <!-- Title -->
            <div>
                <label class="block text-gray-300 mb-2">Titre</label>
                <input type="text" name="title" value="{{ old('title', $project->title ?? '') }}" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <!-- Featured -->
            <div class="flex items-center">
                <input type="checkbox" name="is_featured" id="is_featured" value="1" {{ old('is_featured', $project->is_featured ?? false) ? 'checked' : '' }} class="w-4 h-4 text-indigo-600 bg-gray-700 border-gray-600 rounded focus:ring-indigo-500">
                <label for="is_featured" class="ml-2 text-gray-300">Mettre en avant sur l'accueil</label>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-gray-300 mb-2">Description courte</label>
                <textarea name="description" rows="3" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('description', $project->description ?? '') }}</textarea>
            </div>

            <!-- Content -->
            <div>
                <label class="block text-gray-300 mb-2">Contenu (HTML)</label>
                <textarea name="content" rows="10" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 font-mono focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('content', $project->content ?? '') }}</textarea>
            </div>

            <!-- Links -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-300 mb-2">URL Repo</label>
                    <input type="url" name="url_repo" value="{{ old('url_repo', $project->url_repo ?? '') }}" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 focus:border-indigo-500 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-gray-300 mb-2">URL Demo</label>
                    <input type="url" name="url_demo" value="{{ old('url_demo', $project->url_demo ?? '') }}" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            </div>

            <!-- Categories -->
            <div>
                <label class="block text-gray-300 mb-2">Catégories</label>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-2">
                    @foreach($categories as $category)
                        <label class="inline-flex items-center text-gray-300">
                            <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                {{ (collect(old('categories', isset($project) ? $project->categories->pluck('id') : []))->contains($category->id)) ? 'checked' : '' }}
                                class="form-checkbox bg-gray-700 border-gray-600 text-indigo-600 rounded focus:ring-indigo-500">
                            <span class="ml-2">{{ $category->name }}</span>
                        </label>
                    @endforeach
                </div>
                <input type="text" name="new_categories" placeholder="Nouvelles catégories (séparées par des virgules)" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 mt-2 focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <!-- Thumbnail -->
            <div>
                <label class="block text-gray-300 mb-2">Miniature</label>
                @if(isset($project) && $project->thumbnail)
                    <img src="{{ asset($project->thumbnail) }}" class="h-32 w-auto mb-2 rounded border border-gray-600">
                @endif
                <input type="file" name="thumbnail" class="w-full text-gray-300">
            </div>

            <!-- Gallery Images -->
            <div>
                <label class="block text-gray-300 mb-2">Images de la galerie</label>
                @if(isset($project) && $project->images->count() > 0)
                    <div class="grid grid-cols-3 gap-4 mb-4">
                        @foreach($project->images as $image)
                            <div class="relative group">
                                <img src="{{ asset($image->image_path) }}" class="h-24 w-full object-cover rounded border border-gray-600">
                                <a href="{{ route('admin.images.delete', $image->id) }}" class="absolute top-0 right-0 bg-red-600 text-white p-1 rounded-bl opacity-0 group-hover:opacity-100 transition" onclick="return confirm('Supprimer cette image ?')">×</a>
                            </div>
                        @endforeach
                    </div>
                @endif
                <input type="file" name="images[]" multiple class="w-full text-gray-300">
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-500 transition">Annuler</a>
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">Enregistrer</button>
            </div>
        </form>
    </div>
</x-public-layout>
