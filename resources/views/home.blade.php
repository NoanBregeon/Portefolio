<x-public-layout>
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-indigo-600 to-purple-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4">
                    Bienvenue sur mon Portfolio
                </h1>
                <p class="text-xl md:text-2xl text-indigo-100 mb-8 max-w-3xl mx-auto">
                    Développeur Full Stack Junior passionné par Laravel, PHP et l'écosystème Web moderne.
                </p>
                <div class="flex justify-center gap-4">
                    <a href="{{ route('projects.index') }}" class="bg-white text-indigo-600 px-8 py-3 rounded-full font-bold text-lg hover:bg-gray-100 transition shadow-lg">
                        Voir mes projets
                    </a>
                    <a href="{{ route('contact.index') }}" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-bold text-lg hover:bg-white hover:text-indigo-600 transition">
                        Me contacter
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Compétences -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Mes Compétences</h2>
                <p class="mt-4 text-gray-600">Les technologies que j'utilise au quotidien</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($skills as $category => $categorySkills)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-indigo-600 mb-4 border-b pb-2">{{ $category }}</h3>
                            <div class="space-y-3">
                                @foreach($categorySkills as $skill)
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-700 font-medium flex items-center">
                                            @if($skill->icon)
                                                <i class="{{ $skill->icon }} mr-2 text-gray-400"></i>
                                            @endif
                                            {{ $skill->name }}
                                        </span>
                                        <div class="w-24 bg-gray-200 rounded-full h-2.5">
                                            <div class="bg-indigo-600 h-2.5 rounded-full" style="width: {{ $skill->proficiency }}%"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center text-gray-500">
                        Aucune compétence renseignée pour le moment.
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Section Derniers Projets -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900">Derniers Projets</h2>
                    <p class="mt-4 text-gray-600">Quelques unes de mes réalisations récentes</p>
                </div>
                <a href="{{ route('projects.index') }}" class="hidden md:inline-flex items-center text-indigo-600 hover:text-indigo-700 font-semibold">
                    Voir tout les projets
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($projects as $project)
                    <div class="group bg-white rounded-xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 overflow-hidden flex flex-col h-full">
                        <div class="relative h-48 bg-gray-200 overflow-hidden">
                            @if($project->thumbnail)
                                <img src="{{ Storage::url($project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-indigo-50 text-indigo-300">
                                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                            @endif
                            <div class="absolute top-4 right-4">
                                @foreach($project->categories->take(1) as $category)
                                    <span class="bg-white/90 backdrop-blur-sm text-indigo-600 text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                                        {{ $category->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        <div class="p-6 flex-grow flex flex-col">
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-indigo-600 transition">{{ $project->title }}</h3>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3 flex-grow">
                                {{ $project->description }}
                            </p>
                            <div class="mt-auto pt-4 border-t border-gray-100 flex justify-between items-center">
                                <span class="text-xs text-gray-500">{{ $project->published_at ? $project->published_at->format('M Y') : 'Brouillon' }}</span>
                                <a href="{{ route('projects.show', $project) }}" class="text-indigo-600 hover:text-indigo-800 font-medium text-sm">En savoir plus &rarr;</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12 bg-gray-50 rounded-lg border border-dashed border-gray-300">
                        <p class="text-gray-500">Aucun projet publié pour le moment.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-8 text-center md:hidden">
                <a href="{{ route('projects.index') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-700 font-semibold">
                    Voir tout les projets
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
</x-public-layout>
