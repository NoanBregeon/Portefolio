<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/@studio-freight/lenis@1.0.29/dist/lenis.min.js"></script>
        <script>
            tailwind.config = {
                theme: {
                    fontFamily: {
                        sans: ['Figtree', 'sans-serif'],
                        display: ['Space Grotesk', 'sans-serif'],
                        mono: ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', 'monospace'],
                    },
                    fontSize: {
                        xs: ['0.875rem', { lineHeight: '1.25rem' }],
                        sm: ['1rem', { lineHeight: '1.5rem' }],
                        base: ['1.125rem', { lineHeight: '1.75rem' }],
                        lg: ['1.25rem', { lineHeight: '1.75rem' }],
                        xl: ['1.5rem', { lineHeight: '2rem' }],
                        '2xl': ['1.875rem', { lineHeight: '2.25rem' }],
                        '3xl': ['2.25rem', { lineHeight: '2.5rem' }],
                        '4xl': ['3rem', { lineHeight: '1' }],
                        '5xl': ['3.75rem', { lineHeight: '1' }],
                        '6xl': ['4.5rem', { lineHeight: '1' }],
                        '7xl': ['6rem', { lineHeight: '1' }],
                        '8xl': ['8rem', { lineHeight: '1' }],
                        '9xl': ['10rem', { lineHeight: '1' }],
                    },
                    extend: {
                        colors: {
                            indigo: {
                                50: '#eef2ff',
                                100: '#e0e7ff',
                                200: '#c7d2fe',
                                300: '#a5b4fc',
                                400: '#818cf8',
                                500: '#6366f1',
                                600: '#4f46e5',
                                700: '#4338ca',
                                800: '#3730a3',
                                900: '#312e81',
                            }
                        },
                        animation: {
                            'fade-in-up': 'fadeInUp 0.8s cubic-bezier(0.25, 1, 0.5, 1) forwards',
                            'bounce': 'bounce 2s infinite',
                            'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                            'breathe': 'breathe 3s ease-in-out infinite',
                            'focus-reveal': 'focusReveal 1.5s cubic-bezier(0.25, 1, 0.5, 1) forwards',
                        },
                        keyframes: {
                            fadeInUp: {
                                '0%': { opacity: '0', transform: 'translateY(20px)' },
                                '100%': { opacity: '1', transform: 'translateY(0)' },
                            },
                            breathe: {
                                '0%, 100%': { transform: 'scale(1)' },
                                '50%': { transform: 'scale(1.05)' },
                            },
                            focusReveal: {
                                '0%': { filter: 'blur(10px)', opacity: '0', letterSpacing: '0.5em' },
                                '100%': { filter: 'blur(0)', opacity: '1', letterSpacing: 'normal' },
                            },
                            noise: {
                                '0%, 100%': { transform: 'translate(0, 0)' },
                                '10%': { transform: 'translate(-5%, -5%)' },
                                '20%': { transform: 'translate(-10%, 5%)' },
                                '30%': { transform: 'translate(5%, -10%)' },
                                '40%': { transform: 'translate(-5%, 15%)' },
                                '50%': { transform: 'translate(-10%, 5%)' },
                                '60%': { transform: 'translate(15%, 0)' },
                                '70%': { transform: 'translate(0, 10%)' },
                                '80%': { transform: 'translate(-15%, 0)' },
                                '90%': { transform: 'translate(10%, 5%)' },
                            }
                        }
                    }
                }
            }
        </script>
        <style>
            /* Custom Scrollbar */
            ::-webkit-scrollbar {
                width: 10px;
            }
            ::-webkit-scrollbar-track {
                background: #111827;
            }
            ::-webkit-scrollbar-thumb {
                background: #4f46e5;
                border-radius: 5px;
                border: 2px solid #111827;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: #4338ca;
            }

            .cursor-dot,
            .cursor-outline {
                position: fixed;
                top: 0;
                left: 0;
                transform: translate(-50%, -50%);
                border-radius: 50%;
                z-index: 9999;
                pointer-events: none;
            }
            .cursor-dot {
                width: 8px;
                height: 8px;
                background-color: #818cf8;
            }
            .cursor-outline {
                width: 40px;
                height: 40px;
                border: 1px solid #818cf8;
                transition: width 0.2s, height 0.2s, background-color 0.2s;
            }
            body:hover .cursor-outline {
                width: 50px;
                height: 50px;
                background-color: rgba(129, 140, 248, 0.1);
            }
            .noise-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                pointer-events: none;
                z-index: 9998;
                opacity: 0.05;
                background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyBAMAAADsEZWCAAAAGFBMVEUAAAA5OTkAAABMTExERERmZmYzMzNmZmYAAAC5M2I4AAAACHRSTlMAMwAzzMz//wD335WcAAAAWklEQVQ4y2NgwA34BwQw4A98A4I4A9+AII7ANyCIE/ANCOIEfAOCuADfgCAu4BsQxAX8A4K4gH9AEBfwDwjiAv4BQVzAPyCIC/gHBHEB/4AgLuAfEMQF/AOCuAC/iC+Qy7n7LgAAAABJRU5ErkJggg==');
                animation: noise 1s steps(10) infinite;
            }
        </style>
    </head>
    <body class="font-sans antialiased text-gray-100 bg-gray-900 cursor-none"
          x-data="{ loading: true }"
          x-init="setTimeout(() => loading = false, 800)"
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
    </body>
</html>
