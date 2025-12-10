<x-public-layout>
    <div class="py-12 relative z-10" x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 transition-all duration-700 transform"
                 :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                <h1 class="text-4xl font-bold text-white drop-shadow-lg font-display">Mes Projets</h1>
                <p class="mt-4 text-xl text-gray-300 font-display">Découvrez l'ensemble de mes réalisations techniques et créatives.</p>
                <div class="w-24 h-1 bg-indigo-500 mx-auto rounded-full mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($projects as $project)
                    <div class="group bg-gray-800/40 backdrop-blur-md rounded-xl shadow-lg hover:shadow-2xl hover:shadow-indigo-500/20 transition-all duration-500 border border-gray-700 overflow-hidden flex flex-col h-full transform hover:-translate-y-2 hover:rotate-1"
                         style="transition-delay: {{ $loop->index * 100 }}ms"
                         :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-20'">
                        <div class="relative h-56 bg-gray-900 overflow-hidden">
                            @if($project->thumbnail && file_exists(public_path($project->thumbnail)))
                                <img src="{{ asset($project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 opacity-80 group-hover:opacity-100">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gray-800 text-indigo-400">
                                    <svg class="w-16 h-16 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-60"></div>
                            <div class="absolute top-4 right-4 flex gap-2">
                                @foreach(collect($project->categories)->take(2) as $category)
                                    <span class="bg-gray-900/80 backdrop-blur-sm text-indigo-300 text-xs font-bold px-3 py-1 rounded-full border border-gray-600 shadow-lg">
                                        {{ $category->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        <div class="p-6 flex-grow flex flex-col relative">
                            <div class="absolute inset-0 bg-indigo-500/5 opacity-0 group-hover:opacity-100 transition duration-500 pointer-events-none"></div>
                            <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-indigo-400 transition">
                                <a href="{{ route('projects.show', $project->slug) }}" class="focus:outline-none">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    {{ $project->title }}
                                </a>
                            </h3>
                            <p class="text-gray-400 mb-4 line-clamp-3 flex-grow relative z-10">
                                {!! Str::limit(strip_tags($project->description), 100) !!}
                            </p>
                            <div class="mt-auto pt-4 border-t border-gray-700 flex justify-between items-center relative z-10">
                                <span class="text-sm text-gray-500 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    {{ $project->published_at->format('M Y') }}
                                </span>
                                <a href="{{ route('projects.show', $project->slug) }}" class="inline-flex items-center text-indigo-400 group-hover:text-indigo-300 font-medium transition group-hover:translate-x-1">
                                    Voir le détail
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12 bg-gray-800/30 rounded-xl border border-gray-700 border-dashed">
                        <svg class="w-16 h-16 mx-auto text-gray-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        <p class="text-gray-400 text-lg">Aucun projet à afficher pour le moment.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $projects->links() }}
            </div>
        </div>
    </div>
</x-public-layout>
