<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Portfolio') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600|space-grotesk:300,400,500,600,700" rel="stylesheet" />

        <!-- Highlight.js -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
        <script>hljs.highlightAll();</script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/@studio-freight/lenis@1.0.29/dist/lenis.min.js"></script>
    </head>
    <body class="font-sans antialiased text-gray-100 bg-gray-900 cursor-none"
          x-data="{ loading: true }"
          x-init="setTimeout(() => loading = false, 200)"
          @start-loading.window="loading = true">

        <!-- Loading Screen -->
        <div x-show="loading"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-500"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="fixed inset-0 z-[9999] bg-gray-900 flex flex-col items-center justify-center">

            <!-- Animated Loader -->
            <div class="relative w-24 h-24">
                <!-- Outer Ring -->
                <div class="absolute inset-0 border-4 border-indigo-500/30 border-t-indigo-500 rounded-full animate-spin"></div>
                <!-- Inner Ring -->
                <div class="absolute inset-4 border-4 border-purple-500/30 border-b-purple-500 rounded-full animate-spin" style="animation-duration: 1.5s; animation-direction: reverse;"></div>
                <!-- Core -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-4 h-4 bg-white rounded-full animate-pulse shadow-[0_0_15px_rgba(255,255,255,0.8)]"></div>
                </div>
            </div>

            <!-- Loading Text -->
            <div class="mt-8 text-indigo-400 font-mono text-sm tracking-widest animate-pulse">
                INITIALISATION...
            </div>
        </div>

        <div class="cursor-dot" id="cursor-dot"></div>
        <div class="cursor-outline" id="cursor-outline"></div>
        <div class="noise-overlay"></div>
        <div id="canvas-container" class="fixed inset-0 z-0 pointer-events-none"></div>
        <div class="min-h-screen flex flex-col relative z-10">
            <!-- Header -->
            <header class="bg-gray-900/80 backdrop-blur-md border-b border-gray-800 sticky top-0 z-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
                    <div class="text-2xl font-bold text-indigo-400 hover:text-indigo-300 transition duration-300" style="text-shadow: 0 0 10px rgba(99, 102, 241, 0.5);">
                        <a href="{{ route('home') }}">Noan Bregeon</a>
                    </div>
                    <nav class="hidden md:flex space-x-8">
                        <a href="{{ route('home') }}" class="text-gray-300 hover:text-indigo-400 transition relative group text-sm uppercase tracking-wider">
                            Accueil
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-400 transition-all group-hover:w-full"></span>
                        </a>
                        <a href="{{ route('about') }}" class="text-gray-300 hover:text-indigo-400 transition relative group text-sm uppercase tracking-wider">
                            À propos
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-400 transition-all group-hover:w-full"></span>
                        </a>
                        <a href="{{ route('projects.index') }}" class="text-gray-300 hover:text-indigo-400 transition relative group text-sm uppercase tracking-wider">
                            Projets
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-400 transition-all group-hover:w-full"></span>
                        </a>
                        <a href="{{ route('contact.index') }}" class="text-gray-300 hover:text-indigo-400 transition relative group text-sm uppercase tracking-wider">
                            Contact
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-400 transition-all group-hover:w-full"></span>
                        </a>
                    </nav>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-gray-900/90 backdrop-blur-md border-t border-gray-800 text-gray-400 py-8 mt-auto">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <p>&copy; {{ date('Y') }} Mon Portfolio. Fait avec <span class="text-red-500 animate-pulse">❤</span> et Laravel.</p>
                </div>
            </footer>
        </div>

        <script>
            const cursorDot = document.getElementById('cursor-dot');
            const cursorOutline = document.getElementById('cursor-outline');

            window.addEventListener('mousemove', (e) => {
                const posX = e.clientX;
                const posY = e.clientY;

                cursorDot.style.left = `${posX}px`;
                cursorDot.style.top = `${posY}px`;

                // Animation fluide pour le cercle extérieur
                cursorOutline.animate({
                    left: `${posX}px`,
                    top: `${posY}px`
                }, { duration: 500, fill: "forwards" });
            });

            // Gestion des transitions de page
            document.addEventListener('click', (e) => {
                const link = e.target.closest('a');
                // Vérifie si c'est un lien interne valide
                if (link &&
                    link.href &&
                    link.href.startsWith(window.location.origin) &&
                    !link.hasAttribute('target') &&
                    !e.ctrlKey &&
                    !e.metaKey &&
                    link.getAttribute('href') !== '#'
                ) {
                    e.preventDefault();
                    // Déclenche l'animation de chargement via Alpine
                    window.dispatchEvent(new CustomEvent('start-loading'));

                    // Attend que l'animation se joue avant de changer de page
                    setTimeout(() => {
                        window.location.href = link.href;
                    }, 600);
                }
            });

            // Initialisation de Lenis (Smooth Scroll)
            const lenis = new Lenis({
                duration: 1.2,
                easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
                direction: 'vertical',
                gestureDirection: 'vertical',
                smooth: true,
                mouseMultiplier: 1,
                smoothTouch: false,
                touchMultiplier: 2,
            });

            function raf(time) {
                lenis.raf(time);
                requestAnimationFrame(raf);
            }

            requestAnimationFrame(raf);

            // Effet Magnétique sur les boutons
            const magneticButtons = document.querySelectorAll('.magnetic-btn');
            magneticButtons.forEach((btn) => {
                btn.addEventListener('mousemove', (e) => {
                    const position = btn.getBoundingClientRect();
                    const x = e.clientX - position.left - position.width / 2;
                    const y = e.clientY - position.top - position.height / 2;

                    btn.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
                    btn.children[0].style.transform = `translate(${x * 0.1}px, ${y * 0.1}px)`;
                });

                btn.addEventListener('mouseleave', () => {
                    btn.style.transform = 'translate(0px, 0px)';
                    btn.children[0].style.transform = 'translate(0px, 0px)';
                });
            });
        </script>

        <!-- Hidden Admin Login -->
        <div class="fixed bottom-0 right-0 p-2 opacity-0 hover:opacity-100 transition-opacity duration-500 z-50">
            <a href="{{ route('login') }}" class="text-gray-500 hover:text-white text-xs">Admin</a>
        </div>
            <!-- Bouton Accessibilité -->
            <button id="accessibility-toggle" class="fixed bottom-4 left-4 z-50 bg-blue-100 border border-blue-300 shadow-lg rounded-full px-4 py-2 text-sm font-semibold text-blue-900 transition-colors duration-300 hover:bg-blue-200 focus:outline-none">
                Mode accessible
            </button>
    </body>
</html>
