<x-public-layout>
    <!-- Hero Section -->
    <div class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 via-purple-300 to-indigo-300 mb-6 drop-shadow-lg animate-fade-in-up"
                x-data="{ text: '', textToType: 'Noan Bregeon', type() {
                    let i = 0;
                    let interval = setInterval(() => {
                        this.text += this.textToType.charAt(i);
                        i++;
                        if (i > this.textToType.length) clearInterval(interval);
                    }, 50);
                }}"
                x-init="type()">
                <span x-text="text"></span><span class="animate-pulse text-indigo-400">|</span>
            </h1>
            <p class="text-2xl md:text-3xl text-gray-300 mb-10 max-w-3xl mx-auto font-light animate-fade-in-up delay-100">
                Développeur Full Stack & Créateur d'Expériences Digitales
            </p>
            <div class="flex justify-center gap-6 animate-fade-in-up delay-200">
                <a href="{{ route('projects.index') }}" class="group relative px-8 py-4 bg-indigo-600/20 backdrop-blur-sm border border-indigo-500/50 rounded-full text-indigo-300 font-bold text-lg hover:bg-indigo-600 hover:text-white transition-all duration-300 shadow-[0_0_20px_rgba(79,70,229,0.3)] hover:shadow-[0_0_30px_rgba(79,70,229,0.6)]">
                    <span class="relative z-10">Explorer mes projets</span>
                </a>
                <a href="{{ route('contact.index') }}" class="group relative px-8 py-4 bg-gray-800/40 backdrop-blur-sm border border-gray-700 rounded-full text-gray-300 font-bold text-lg hover:bg-gray-700 hover:text-white transition-all duration-300">
                    <span class="relative z-10">Me contacter</span>
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce text-gray-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
        </div>
    </div>

    <!-- Section Compétences -->
    <div class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Mes Compétences</h2>
                <div class="w-24 h-1 bg-indigo-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($skills as $category => $categorySkills)
                    <div class="bg-gray-800/40 backdrop-blur-md border border-gray-700/50 rounded-2xl p-8 hover:bg-gray-800/60 transition duration-300 group">
                        <h3 class="text-2xl font-bold text-indigo-400 mb-6 border-b border-gray-700 pb-4 flex items-center">
                            @if($category == 'Backend')
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 01-2 2v4a2 2 0 012 2h14a2 2 0 012-2v-4a2 2 0 01-2-2m-2-4h.01M17 16h.01"></path></svg>
                            @elseif($category == 'Frontend')
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            @else
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            @endif
                            {{ $category }}
                        </h3>
                        <div class="space-y-5">
                            @foreach($categorySkills as $skill)
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-gray-300 font-medium flex items-center group-hover:text-white transition">
                                            @if(isset($skill['icon']))
                                                <i class="{{ $skill['icon'] }} mr-3 text-gray-500 group-hover:text-indigo-400 transition"></i>
                                            @endif
                                            {{ $skill['name'] }}
                                        </span>
                                        <span class="text-xs text-indigo-400 font-mono">{{ $skill['proficiency'] }}%</span>
                                    </div>
                                    <div class="w-full bg-gray-700 rounded-full h-1.5 overflow-hidden">
                                        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 h-1.5 rounded-full shadow-[0_0_10px_rgba(99,102,241,0.5)]" style="width: {{ $skill['proficiency'] }}%"></div>
                                    </div>
                                </div>
                            @endforeach
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
    <div class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4">
                <div>
                    <h2 class="text-4xl font-bold text-white mb-4">Derniers Projets</h2>
                    <div class="w-24 h-1 bg-indigo-500 rounded-full"></div>
                </div>
                <a href="{{ route('projects.index') }}" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 font-semibold transition group">
                    Voir tous les projets
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($projects as $project)
                    <div class="group bg-gray-800/40 backdrop-blur-sm rounded-2xl overflow-hidden border border-gray-700/50 hover:border-indigo-500/50 transition duration-500 hover:shadow-[0_0_30px_rgba(79,70,229,0.15)] flex flex-col h-full">
                        <div class="relative h-56 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60 z-10"></div>
                            @if($project->thumbnail && file_exists(public_path($project->thumbnail)))
                                <img src="{{ asset($project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-in-out">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gray-800 text-gray-600">
                                    <svg class="w-16 h-16 opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                            @endif
                            <div class="absolute top-4 right-4 z-20">
                                @foreach(collect($project->categories)->take(1) as $category)
                                    <span class="bg-gray-900/80 backdrop-blur-md text-indigo-300 text-xs font-bold px-3 py-1 rounded-full border border-gray-700">
                                        {{ $category->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        <div class="p-8 flex-grow flex flex-col">
                            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-indigo-400 transition">{{ $project->title }}</h3>
                            <p class="text-gray-400 text-sm mb-6 line-clamp-3 flex-grow leading-relaxed">
                                {{ $project->description }}
                            </p>
                            <div class="mt-auto pt-6 border-t border-gray-700/50 flex justify-between items-center">
                                <span class="text-xs text-gray-500 font-mono">{{ $project->published_at->format('M Y') }}</span>
                                <a href="{{ route('projects.show', $project->slug) }}" class="text-indigo-400 hover:text-indigo-300 font-medium text-sm flex items-center group/link">
                                    En savoir plus
                                    <span class="ml-1 transform group-hover/link:translate-x-1 transition">&rarr;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-16 bg-gray-800/30 rounded-2xl border border-dashed border-gray-700">
                        <p class="text-gray-500">Aucun projet publié pour le moment.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-public-layout>
