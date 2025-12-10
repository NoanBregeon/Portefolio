<x-public-layout>
    <!-- 2. Présentation (About Me) -->
    <div id="about" class="py-24 relative z-10 bg-gray-900/30 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-white mb-6 flex items-center font-display">
                        <span class="text-indigo-500 mr-3">#</span> À propos de moi
                    </h2>
                    <div class="prose prose-invert text-gray-300 leading-relaxed">
                        <p class="mb-4">
                            Passionné par le développement informatique, j'ai suivi un parcours en <strong>BTS SIO option SLAM</strong> (Solutions Logicielles et Applications Métiers). Mon objectif est de concevoir des solutions robustes et efficaces.
                        </p>
                        <p class="mb-4">
                            Je suis particulièrement à l'aise avec l'écosystème <strong>Laravel</strong> pour le web et <strong>C#</strong> pour le développement applicatif lourd. J'accorde une grande importance à la qualité du code, à la sécurité et aux bonnes pratiques (MVC, SOLID).
                        </p>
                        <p class="mb-6">
                            Actuellement à la recherche d'une <strong>alternance</strong> ou d'un <strong>premier poste</strong> en tant que développeur web ou applicatif, je suis prêt à relever de nouveaux défis techniques.
                        </p>
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

                <!-- Card "Identity" -->
                <div class="bg-gray-800/50 border border-gray-700 rounded-xl p-6 shadow-xl relative overflow-hidden group hover:border-indigo-500/50 transition-colors">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <svg class="w-32 h-32 text-indigo-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Ma méthode de travail</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Code <strong>propre et structuré</strong></span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Approche orientée <strong>sécurité</strong></span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Documentation rigoureuse</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-400 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Veille technologique constante</span>
                        </li>
                    </ul>
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
                            <li class="mb-6 ml-6 transition-all duration-700 delay-700"
                                :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-4'">
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-indigo-900 rounded-full -left-3 ring-8 ring-gray-900 z-10">
                                    <svg class="w-3 h-3 text-indigo-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 00-1-1H6zm1 2h6v1H7V4z" clip-rule="evenodd"></path></svg>
                                </span>
                                <h4 class="flex items-center mb-1 text-lg font-semibold text-white">BTS SIO SLAM</h4>
                                <time class="block mb-2 text-sm font-normal text-gray-400">IIA Saint-Nazaire</time>
                                <p class="text-sm text-gray-400">Spécialisation développement logiciel et web.</p>
                            </li>
                            <li class="mb-6 ml-6 transition-all duration-700 delay-1000"
                                :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-4'">
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-700 rounded-full -left-3 ring-8 ring-gray-900 z-10">
                                    <svg class="w-3 h-3 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 001-.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                                </span>
                                <h4 class="mb-1 text-lg font-semibold text-white">Expérience Terrain</h4>
                                <time class="block mb-2 text-sm font-normal text-gray-400">Hyper U</time>
                                <p class="text-sm text-gray-400">Stage et emploi étudiant. Rigueur et contact client.</p>
                            </li>
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
