<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Gestion du contenu</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <a href="{{ route('admin.projects.index') }}" class="block p-6 bg-indigo-50 rounded-lg hover:bg-indigo-100">
                            <span class="text-indigo-700 font-bold text-xl">Projets</span>
                        </a>
                        <a href="{{ route('admin.skills.index') }}" class="block p-6 bg-green-50 rounded-lg hover:bg-green-100">
                            <span class="text-green-700 font-bold text-xl">Compétences</span>
                        </a>
                        <a href="{{ route('admin.articles.index') }}" class="block p-6 bg-yellow-50 rounded-lg hover:bg-yellow-100">
                            <span class="text-yellow-700 font-bold text-xl">Articles</span>
                        </a>
                        <a href="{{ route('admin.categories.index') }}" class="block p-6 bg-purple-50 rounded-lg hover:bg-purple-100">
                            <span class="text-purple-700 font-bold text-xl">Catégories</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
