<x-public-layout>
    <!-- 2. Présentation (About Me) -->
    <div id="about" class="py-24 relative z-10 bg-gray-900/30 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-white mb-6 flex items-center font-display">
                        <span class="text-indigo-500 mr-3">#</span> À propos de moi
                    </h2>
                    <div class="prose prose-invert text-gray-300 leading-relaxed font-sans">
                        {!! nl2br(e($aboutText)) !!}
                    </div>

                    <!-- Mini Stack -->
                    <div class="flex flex-wrap gap-3 mt-6">
                        <span class="px-3 py-1 bg-gray-800 border border-gray-700 rounded text-sm text-indigo-300">Laravel 12</span>
                        <span class="px-3 py-1 bg-gray-800 border border-gray-700 rounded text-sm text-indigo-300">PHP 8.4</span>
                        <span class="px-3 py-1 bg-gray-800 border border-gray-700 rounded text-sm text-indigo-300">C#</span>
                        <span class="px-3 py-1 bg-gray-800 border border-gray-700 rounded text-sm text-indigo-300">PostgreSQL</span>
                        <span class="px-3 py-1 bg-gray-800 border border-gray-700 rounded text-sm text-indigo-300">Linux Debian</span>
                    </div>
                </div>

                <!-- Photo de profil -->
                <div class="flex justify-center items-center group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                    <img src="{{ asset('images/photo_profile/image_photo_profile.png') }}" alt="Photo de profil" class="relative w-64 h-64 rounded-full border-4 border-indigo-500/50 shadow-2xl group-hover:shadow-indigo-500/20 group-hover:border-indigo-400 transition-all duration-500 object-cover">
                </div>
            </div>
        </div>
    </div>

    <!-- 4. Compétences Techniques -->
    <div id="skills" class="py-24 relative z-10 bg-gray-900/30 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4 font-display">Compétences Techniques</h2>
                <div class="w-24 h-1 bg-indigo-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Langages -->
                <div class="bg-gray-800/50 p-6 rounded-xl border border-gray-700">
                    <h3 class="text-lg font-bold text-indigo-400 mb-4 border-b border-gray-700 pb-2">Langages</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>PHP 8.4</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>C#</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>JavaScript / Node</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>SQL (MariaDB, PG)</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>Bash</li>
                    </ul>
                </div>

                <!-- Frameworks -->
                <div class="bg-gray-800/50 p-6 rounded-xl border border-gray-700">
                    <h3 class="text-lg font-bold text-indigo-400 mb-4 border-b border-gray-700 pb-2">Frameworks & Outils</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>Laravel 12</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>Livewire</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>Tailwind CSS</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>Git / GitHub</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>VS Code</li>
                    </ul>
                </div>

                <!-- Système -->
                <div class="bg-gray-800/50 p-6 rounded-xl border border-gray-700">
                    <h3 class="text-lg font-bold text-indigo-400 mb-4 border-b border-gray-700 pb-2">Système & Réseau</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>Debian 12 / AlmaLinux</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>Apache / SSH</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>Active Directory</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>Virtualisation</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>DNS / DHCP</li>
                    </ul>
                </div>

                <!-- Méthodologie -->
                <div class="bg-gray-800/50 p-6 rounded-xl border border-gray-700">
                    <h3 class="text-lg font-bold text-indigo-400 mb-4 border-b border-gray-700 pb-2">Méthodologie</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>MVC</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>POO</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>UML (MCD, Seq)</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>Tests Unitaires</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-indigo-500 rounded-full mr-2"></span>Documentation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. Soft Skills & Parcours -->
    <div class="py-24 relative z-10" x-data="{ show: false }" x-init="setTimeout(() => show = true, 200)">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Soft Skills -->
                <div class="bg-gray-800/40 backdrop-blur-sm border border-gray-700 rounded-xl p-8 transition-all duration-700 delay-100"
                     :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                    <h3 class="text-2xl font-bold text-white mb-6">Soft Skills</h3>
                    <div class="space-y-4">
                        <div class="flex items-center group">
                            <div class="w-10 h-10 rounded-full bg-indigo-900/50 flex items-center justify-center text-indigo-400 mr-4 group-hover:scale-110 group-hover:bg-indigo-800 transition-all duration-300 animate-pulse-slow">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold group-hover:text-indigo-300 transition-colors">Autonomie</h4>
                                <p class="text-sm text-gray-400">Capable de gérer des environnements complexes.</p>
                            </div>
                        </div>
                        <div class="flex items-center group">
                            <div class="w-10 h-10 rounded-full bg-indigo-900/50 flex items-center justify-center text-indigo-400 mr-4 group-hover:scale-110 group-hover:bg-indigo-800 transition-all duration-300 animate-pulse-slow" style="animation-delay: 500ms;">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold group-hover:text-indigo-300 transition-colors">Résolution de problèmes</h4>
                                <p class="text-sm text-gray-400">Débogage système et applicatif.</p>
                            </div>
                        </div>
                        <div class="flex items-center group">
                            <div class="w-10 h-10 rounded-full bg-indigo-900/50 flex items-center justify-center text-indigo-400 mr-4 group-hover:scale-110 group-hover:bg-indigo-800 transition-all duration-300 animate-pulse-slow" style="animation-delay: 1000ms;">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold group-hover:text-indigo-300 transition-colors">Apprentissage rapide</h4>
                                <p class="text-sm text-gray-400">Veille constante sur les technos.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Parcours -->
                <div class="bg-gray-800/40 backdrop-blur-sm border border-gray-700 rounded-xl p-8 transition-all duration-700 delay-300"
                     :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                    <h3 class="text-2xl font-bold text-white mb-6">Parcours</h3>
                    <div class="relative ml-3">
                        <!-- Animated Line -->
                        <div class="absolute left-0 top-0 bottom-0 w-px bg-gray-700 origin-top transition-transform duration-1000 ease-out delay-500"
                             :class="show ? 'scale-y-100' : 'scale-y-0'"></div>

                        <ol class="relative">
                            @forelse($experiences as $xp)
                            <li class="mb-10 ml-10 transition-all duration-700 delay-{{ 500 + ($loop->index * 200) }}"
                                :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-4'">
                                <div class="flex items-start gap-4">
                                    <span class="mt-1 flex items-center justify-center w-7 h-7 rounded-full ring-4 ring-gray-900 z-10 shrink-0 {{ $xp->icon ?: 'bg-gray-700 text-gray-300' }}">
                                        @if(str_contains($xp->icon, '<svg'))
                                            {!! $xp->icon !!}
                                        @else
                                            <!-- Default icon if none provided -->
                                            <svg class="w-3 h-3 text-current" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 001-.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                                        @endif
                                    </span>
                                    <div>
                                        <h4 class="flex items-center mb-1 text-lg font-semibold text-white">{{ $xp->title }}</h4>
                                        <time class="block mb-2 text-sm font-normal text-gray-400">
                                            {{ $xp->company }} |
                                            @if($xp->start_date)
                                                {{ $xp->start_date->format('M Y') }} -
                                            @endif
                                            {{ $xp->end_date ? $xp->end_date->format('M Y') : 'Aujourd\'hui' }}
                                        </time>
                                        <p class="text-sm text-gray-400">{{ $xp->description }}</p>
                                    </div>
                                </div>
                            </li>
                            @empty
                                <p class="text-gray-500 italic ml-6">Aucune expérience renseignée pour le moment.</p>
                            @endforelse
                        </ol>
                    </div>
                </div>

                <!-- Veille -->
                <div class="bg-gray-800/40 backdrop-blur-sm border border-gray-700 rounded-xl p-8 transition-all duration-700 delay-500"
                     :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                    <h3 class="text-2xl font-bold text-white mb-6">Veille Techno</h3>
                    <ul class="space-y-3">
                        <li class="bg-gray-900/50 p-3 rounded border border-gray-700/50 hover:border-indigo-500/50 transition cursor-default hover:-translate-y-1 duration-300">
                            <span class="text-indigo-400 font-bold block text-sm">Laravel 12 & PHP Modern</span>
                            <span class="text-xs text-gray-500">Suivi des nouveautés du framework.</span>
                        </li>
                        <li class="bg-gray-900/50 p-3 rounded border border-gray-700/50 hover:border-indigo-500/50 transition cursor-default hover:-translate-y-1 duration-300">
                            <span class="text-indigo-400 font-bold block text-sm">Sécurité Web</span>
                            <span class="text-xs text-gray-500">Sessions, SQL Injection, SSH hardening.</span>
                        </li>
                        <li class="bg-gray-900/50 p-3 rounded border border-gray-700/50 hover:border-indigo-500/50 transition cursor-default hover:-translate-y-1 duration-300">
                            <span class="text-indigo-400 font-bold block text-sm">Automatisation</span>
                            <span class="text-xs text-gray-500">Bots Discord/Twitch, Scripts Bash.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
