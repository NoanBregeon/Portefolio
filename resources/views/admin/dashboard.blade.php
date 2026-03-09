<x-public-layout>
    <div class="pt-24 pb-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-white">Tableau de bord</h1>
            <div class="flex gap-4">
                <a href="{{ route('admin.about.edit') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded transition">Page À propos</a>
                <a href="{{ route('admin.experiences.index') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded transition">Parcours (CV)</a>
                <a href="{{ route('admin.projects.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded transition">Nouveau Projet</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded transition">Déconnexion</button>
                </form>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-600 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-gray-800 rounded-lg shadow overflow-hidden border border-gray-700">
            <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-gray-900">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Titre</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Catégories</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-400 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800 divide-y divide-gray-700">
                    @foreach($projects as $project)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-white">{{ $project->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-300">
                            @foreach($project->categories as $cat)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-900 text-indigo-200 mr-1">
                                    {{ $cat->name }}
                                </span>
                            @endforeach
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-300">{{ $project->created_at->format('d/m/Y') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('admin.projects.edit', $project) }}" class="text-indigo-400 hover:text-indigo-300 mr-3">Editer</a>
                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline-block" onsubmit="return confirm('Êtes-vous sûr ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:text-red-300">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-public-layout>
