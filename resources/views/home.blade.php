<x-public-layout>
    <style>
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <!-- 1. Page d’accueil (Landing) -->
    <div id="home" class="relative min-h-screen flex items-center justify-center">
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Avatar / Photo -->
            <div class="mb-8 relative inline-block group">
                <div class="absolute inset-0 bg-indigo-500 rounded-full blur-xl opacity-50 group-hover:opacity-75 transition duration-500 animate-pulse-slow"></div>
                <div class="w-32 h-32 md:w-40 md:h-40 rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 p-1 shadow-[0_0_30px_rgba(99,102,241,0.5)] relative z-10 transform transition duration-500 group-hover:scale-105">
                    <img src="{{ asset('images/photo_profile/image_photo_profile.png') }}" alt="Noan Bregeon" class="w-full h-full rounded-full object-cover border-4 border-gray-900">
                </div>
            </div>

            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-white via-indigo-200 to-indigo-400 mb-4 drop-shadow-sm animate-focus-reveal font-display">
                Développeur Full-Stack Junior
            </h1>
            <h2 class="text-xl md:text-2xl text-indigo-300 font-mono mb-6 animate-fade-in-up delay-100">
                BTS SIO SLAM — Spécialisé Laravel & C#
            </h2>

            <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto font-light italic animate-fade-in-up delay-200 font-display">
                « J’aime construire des applications propres, sécurisées et maintenables. »
            </p>

            <div class="flex justify-center gap-6 animate-fade-in-up delay-300">
                <a href="{{ route('projects.index') }}" class="magnetic-btn relative px-8 py-3 bg-indigo-600 text-white font-bold rounded-full overflow-hidden group shadow-[0_4px_15px_rgba(79,70,229,0.4)] transition-all duration-300 hover:shadow-[0_8px_25px_rgba(79,70,229,0.6)] hover:-translate-y-1 active:scale-95">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-indigo-500 via-purple-500 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-[length:200%_200%] animate-gradient-x"></span>
                    <span class="relative z-10 block transition-transform duration-300">Voir mes projets</span>
                </a>
                <a href="{{ route('about') }}" class="magnetic-btn relative px-8 py-3 bg-gray-800/80 hover:bg-gray-700 backdrop-blur-md text-white font-bold rounded-full border border-gray-600 transition-all duration-300 shadow-lg hover:shadow-[0_4px_15px_rgba(255,255,255,0.05)] hover:-translate-y-1 active:scale-95">
                    <span class="relative z-10 block transition-transform duration-300">En savoir plus</span>
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce text-gray-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
        </div>
    </div>

    <!-- 2. Featured Projects (Aperçu) -->
    <div class="py-24 relative z-10 bg-gray-900/50 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl font-bold text-white mb-4">Projets à la une</h2>
                <div class="w-24 h-1 bg-indigo-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($featuredProjects as $project)
                <div class="bg-gray-800/40 backdrop-blur-sm border border-gray-700 rounded-xl p-6 hover:bg-gray-800/70 hover:border-indigo-500/50 hover:shadow-[0_8px_30px_rgba(79,70,229,0.15)] transition-all duration-300 group reveal hover:-translate-y-2">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-white group-hover:text-indigo-300 transition-colors duration-300">{{ $project->title }}</h3>
                    </div>
                    <p class="text-gray-400 text-sm mb-4 leading-relaxed">
                        {{ Str::limit($project->description, 100) }}
                    </p>
                    <div class="flex flex-wrap gap-2 text-xs text-gray-500 mb-4">
                        @foreach($project->categories as $category)
                            <span class="px-2 py-1 bg-gray-900/80 rounded-md border border-gray-700/50 text-indigo-300">{{ $category->name }}</span>
                        @endforeach
                    </div>
                    <a href="{{ route('projects.show', $project->slug) }}" class="text-indigo-400 hover:text-indigo-200 text-sm font-medium flex items-center transition-colors group-hover:translate-x-1 duration-300">
                        Voir le projet <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-12 reveal">
                <a href="{{ route('projects.index') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 transition">
                    Voir tous les projets
                </a>
            </div>
        </div>
    </div>

    <!-- 3. Short About -->
    <div class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="reveal">
                    <h2 class="text-3xl font-bold text-white mb-6">Qui suis-je ?</h2>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        Développeur passionné, je transforme des idées complexes en solutions simples et élégantes.
                        Spécialisé dans l'écosystème Laravel et le développement C#, je m'efforce de créer des applications performantes et sécurisées.
                    </p>
                    <a href="{{ route('about') }}" class="text-indigo-400 hover:text-indigo-300 font-medium flex items-center group">
                        En savoir plus sur mon parcours
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                    </a>
                </div>
                <div class="relative reveal">
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl transform rotate-3 opacity-20"></div>
                    <div class="bg-gray-800 border border-gray-700 rounded-2xl p-8 relative">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center p-4 bg-gray-900/50 rounded-lg">
                                <span class="block text-3xl font-bold text-white mb-1">2+</span>
                                <span class="text-sm text-gray-400">Années d'études</span>
                            </div>
                            <div class="text-center p-4 bg-gray-900/50 rounded-lg">
                                <span class="block text-3xl font-bold text-white mb-1">10+</span>
                                <span class="text-sm text-gray-400">Projets réalisés</span>
                            </div>
                            <div class="text-center p-4 bg-gray-900/50 rounded-lg">
                                <span class="block text-3xl font-bold text-white mb-1">100%</span>
                                <span class="text-sm text-gray-400">Passionné</span>
                            </div>
                            <div class="text-center p-4 bg-gray-900/50 rounded-lg">
                                <span class="block text-3xl font-bold text-white mb-1">∞</span>
                                <span class="text-sm text-gray-400">Envie d'apprendre</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const reveals = document.querySelectorAll('.reveal');

            function revealOnScroll() {
                const windowHeight = window.innerHeight;
                const elementVisible = 150;

                reveals.forEach((reveal) => {
                    const elementTop = reveal.getBoundingClientRect().top;

                    if (elementTop < windowHeight - elementVisible) {
                        reveal.classList.add('active');
                    }
                });
            }

            window.addEventListener('scroll', revealOnScroll);
            // Trigger once on load
            revealOnScroll();
        });
    </script>
</x-public-layout>
