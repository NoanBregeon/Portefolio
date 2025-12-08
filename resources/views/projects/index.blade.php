<x-public-layout>
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900">Mes Projets</h1>
                <p class="mt-4 text-xl text-gray-600">Découvrez l'ensemble de mes réalisations techniques et créatives.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($projects as $project)
                    <div class="group bg-white rounded-xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 overflow-hidden flex flex-col h-full">
                        <div class="relative h-56 bg-gray-200 overflow-hidden">
                            @if($project->thumbnail && file_exists(public_path($project->thumbnail)))
                                <img src="{{ asset($project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-indigo-50 text-indigo-300">
                                    <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                            @endif
                            <div class="absolute top-4 right-4 flex gap-2">
                                @foreach(collect($project->categories)->take(2) as $category)
                                    <span class="bg-white/90 backdrop-blur-sm text-indigo-600 text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                                        {{ $category->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        <div class="p-6 flex-grow flex flex-col">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-indigo-600 transition">
                                <a href="{{ route('projects.show', $project->slug) }}">{{ $project->title }}</a>
                            </h3>
                            <p class="text-gray-600 mb-4 line-clamp-3 flex-grow">
                                {{ $project->description }}
                            </p>
                            <div class="mt-auto pt-4 border-t border-gray-100 flex justify-between items-center">
                                <span class="text-sm text-gray-500 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    {{ $project->published_at->format('M Y') }}
                                </span>
                                <a href="{{ route('projects.show', $project->slug) }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium">
                                    Voir le détail
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12">
                        <p class="text-gray-500 text-lg">Aucun projet à afficher pour le moment.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $projects->links() }}
            </div>
        </div>
    </div>
</x-public-layout>
