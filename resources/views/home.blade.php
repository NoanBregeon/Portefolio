<x-public-layout>
    <!-- 1. Page d’accueil (Landing) -->
    <div id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Avatar / Photo -->
            <div class="mb-8 relative inline-block">
                <div class="w-32 h-32 md:w-40 md:h-40 rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 p-1 shadow-[0_0_30px_rgba(99,102,241,0.5)]">
                    <img src="https://ui-avatars.com/api/?name=Noan+Bregeon&background=1e1b4b&color=818cf8&size=256" alt="Noan Bregeon" class="w-full h-full rounded-full object-cover border-4 border-gray-900">
                </div>
            </div>

            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white mb-4 drop-shadow-lg animate-fade-in-up">
                Développeur Full-Stack Junior
            </h1>
            <h2 class="text-xl md:text-2xl text-indigo-400 font-mono mb-6 animate-fade-in-up delay-100">
                BTS SIO SLAM — Spécialisé Laravel & C#
            </h2>

            <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto font-light italic animate-fade-in-up delay-200">
                « J’aime construire des applications propres, sécurisées et maintenables. »
            </p>

            <div class="flex justify-center gap-6 animate-fade-in-up delay-300">
                <a href="#projects" class="px-8 py-3 bg-indigo-600 hover:bg-indigo-500 text-white font-bold rounded-full transition-all shadow-[0_0_20px_rgba(79,70,229,0.4)] hover:shadow-[0_0_30px_rgba(79,70,229,0.6)] transform hover:-translate-y-1">
                    Voir mes projets
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce text-gray-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
        </div>
    </div>

    <!-- 2. Présentation (About Me) -->
    <div id="about" class="py-24 relative z-10 bg-gray-900/30 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-white mb-6 flex items-center">
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

    <!-- 3. Mes Projets -->
    <div id="projects" class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Mes Projets</h2>
                <div class="w-24 h-1 bg-indigo-500 mx-auto rounded-full"></div>
            </div>

            <!-- Projet E6 : Drive (Featured) -->
            <div class="bg-gray-800/60 backdrop-blur-md border border-indigo-500/30 rounded-2xl overflow-hidden shadow-[0_0_40px_rgba(79,70,229,0.15)] mb-16">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <div class="flex items-center mb-4">
                            <span class="px-3 py-1 bg-indigo-600 text-white text-xs font-bold uppercase tracking-wider rounded-full mr-3">Projet Phare</span>
                            <span class="text-indigo-300 font-mono text-sm">E6 - BTS SIO</span>
                        </div>
                        <h3 class="text-3xl font-bold text-white mb-4">Application Drive & Caisse Connectée</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            Une solution complète comprenant une application web de Drive pour les clients et un logiciel de caisse (client lourd) pour les employés, tous deux connectés à une infrastructure serveur centralisée.
                        </p>

                        <div class="mb-6">
                            <h4 class="text-white font-semibold mb-2 border-b border-gray-700 pb-1 inline-block">Architecture & Stack</h4>
                            <ul class="grid grid-cols-2 gap-2 text-sm text-gray-400 mt-2">
                                <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-2"></span>Laravel (Web)</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-2"></span>C# .NET (Lourd)</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-2"></span>Debian 12 (Srv)</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-2"></span>MariaDB</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-2"></span>Active Directory</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-indigo-500 rounded-full mr-2"></span>OpenNebula</li>
                            </ul>
                        </div>

                        <div class="flex gap-4">
                            <button class="px-6 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-lg transition text-sm font-medium">Voir les détails</button>
                            <button class="px-6 py-2 border border-gray-600 hover:border-gray-400 text-gray-300 hover:text-white rounded-lg transition text-sm font-medium">Documentation</button>
                        </div>
                    </div>
                    <div class="bg-gray-900/50 p-8 flex items-center justify-center border-l border-gray-700/50">
                        <!-- Placeholder for Project Image -->
                        <div class="text-center text-gray-500">
                            <svg class="w-24 h-24 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <p class="text-sm">Captures d'écran Web & Client Lourd</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Consultation Médicale -->
                <div class="bg-gray-800/40 backdrop-blur-sm border border-gray-700 rounded-xl p-6 hover:bg-gray-800/60 transition group">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-white group-hover:text-indigo-400 transition">Consultation Médicale</h3>
                        <span class="text-xs bg-blue-900 text-blue-200 px-2 py-1 rounded">Laravel</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-4">
                        CRUD complet, gestion des authentifications et sessions. Déploiement local avec PostgreSQL. Résolution de problématiques de migration complexes.
                    </p>
                    <div class="flex flex-wrap gap-2 text-xs text-gray-500">
                        <span>#PostgreSQL</span>
                        <span>#Auth</span>
                        <span>#Sécurité</span>
                    </div>
                </div>

                <!-- Aéroport -->
                <div class="bg-gray-800/40 backdrop-blur-sm border border-gray-700 rounded-xl p-6 hover:bg-gray-800/60 transition group">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-white group-hover:text-indigo-400 transition">Gestion Aéroport</h3>
                        <span class="text-xs bg-red-900 text-red-200 px-2 py-1 rounded">Laravel</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-4">
                        Conception BDD complexe, Modèles Eloquent avancés. Utilisation de Larastan pour la qualité du code. Gestion des terminaux et portes d'embarquement.
                    </p>
                    <div class="flex flex-wrap gap-2 text-xs text-gray-500">
                        <span>#Eloquent</span>
                        <span>#Larastan</span>
                        <span>#CleanCode</span>
                    </div>
                </div>

                <!-- Bot Twitch/Discord -->
                <div class="bg-gray-800/40 backdrop-blur-sm border border-gray-700 rounded-xl p-6 hover:bg-gray-800/60 transition group">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-white group-hover:text-indigo-400 transition">Bot Twitch & Discord</h3>
                        <span class="text-xs bg-green-900 text-green-200 px-2 py-1 rounded">Node.js</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-4">
                        Automatisation, modération et interaction. Widgets visuels cohérents, commandes personnalisées et intégration API temps réel.
                    </p>
                    <div class="flex flex-wrap gap-2 text-xs text-gray-500">
                        <span>#API</span>
                        <span>#Automation</span>
                        <span>#JS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. Compétences Techniques -->
    <div id="skills" class="py-24 relative z-10 bg-gray-900/30 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Compétences Techniques</h2>
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
    <div class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Soft Skills -->
                <div class="bg-gray-800/40 backdrop-blur-sm border border-gray-700 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-white mb-6">Soft Skills</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-indigo-900/50 flex items-center justify-center text-indigo-400 mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold">Autonomie</h4>
                                <p class="text-sm text-gray-400">Capable de gérer des environnements complexes.</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-indigo-900/50 flex items-center justify-center text-indigo-400 mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold">Résolution de problèmes</h4>
                                <p class="text-sm text-gray-400">Débogage système et applicatif.</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-indigo-900/50 flex items-center justify-center text-indigo-400 mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold">Apprentissage rapide</h4>
                                <p class="text-sm text-gray-400">Veille constante sur les technos.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Parcours -->
                <div class="bg-gray-800/40 backdrop-blur-sm border border-gray-700 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-white mb-6">Parcours</h3>
                    <ol class="relative border-l border-gray-700 ml-3">
                        <li class="mb-6 ml-6">
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-indigo-900 rounded-full -left-3 ring-8 ring-gray-900">
                                <svg class="w-3 h-3 text-indigo-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 00-1-1H6zm1 2h6v1H7V4z" clip-rule="evenodd"></path></svg>
                            </span>
                            <h4 class="flex items-center mb-1 text-lg font-semibold text-white">BTS SIO SLAM</h4>
                            <time class="block mb-2 text-sm font-normal text-gray-400">IIA Saint-Nazaire</time>
                            <p class="text-sm text-gray-400">Spécialisation développement logiciel et web.</p>
                        </li>
                        <li class="mb-6 ml-6">
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-gray-700 rounded-full -left-3 ring-8 ring-gray-900">
                                <svg class="w-3 h-3 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 001-.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                            </span>
                            <h4 class="mb-1 text-lg font-semibold text-white">Expérience Terrain</h4>
                            <time class="block mb-2 text-sm font-normal text-gray-400">Hyper U</time>
                            <p class="text-sm text-gray-400">Stage et emploi étudiant. Rigueur et contact client.</p>
                        </li>
                    </ol>
                </div>

                <!-- Veille -->
                <div class="bg-gray-800/40 backdrop-blur-sm border border-gray-700 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-white mb-6">Veille Techno</h3>
                    <ul class="space-y-3">
                        <li class="bg-gray-900/50 p-3 rounded border border-gray-700/50 hover:border-indigo-500/50 transition cursor-default">
                            <span class="text-indigo-400 font-bold block text-sm">Laravel 12 & PHP Modern</span>
                            <span class="text-xs text-gray-500">Suivi des nouveautés du framework.</span>
                        </li>
                        <li class="bg-gray-900/50 p-3 rounded border border-gray-700/50 hover:border-indigo-500/50 transition cursor-default">
                            <span class="text-indigo-400 font-bold block text-sm">Sécurité Web</span>
                            <span class="text-xs text-gray-500">Sessions, SQL Injection, SSH hardening.</span>
                        </li>
                        <li class="bg-gray-900/50 p-3 rounded border border-gray-700/50 hover:border-indigo-500/50 transition cursor-default">
                            <span class="text-indigo-400 font-bold block text-sm">Automatisation</span>
                            <span class="text-xs text-gray-500">Bots Discord/Twitch, Scripts Bash.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- 6. Contact -->
    <div id="contact" class="py-24 relative z-10 bg-gray-900/30 backdrop-blur-sm">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-8">Me Contacter</h2>
            <p class="text-xl text-gray-300 mb-12">
                Intéressé par mon profil pour une alternance ou un projet ? N'hésitez pas à me contacter.
            </p>

            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="mailto:contact@noanbregeon.fr" class="flex items-center justify-center px-8 py-4 bg-indigo-600 hover:bg-indigo-500 text-white rounded-xl transition shadow-lg">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Envoyer un email
                </a>
                <a href="https://github.com/NoanBregeon" target="_blank" class="flex items-center justify-center px-8 py-4 bg-gray-800 hover:bg-gray-700 text-white border border-gray-600 rounded-xl transition shadow-lg">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    GitHub
                </a>
            </div>
        </div>
    </div>
</x-public-layout>
