<x-public-layout>
    <div class="text-center py-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Bienvenue sur mon Portfolio</h1>
        <p class="text-xl text-gray-600 mb-8">Développeur Full Stack Junior - Laravel / PHP / JS</p>
        <a href="{{ route('projects.index') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">Voir mes projets</a>
    </div>

    <!-- Section Compétences (Aperçu) -->
    <div class="mt-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Mes Compétences</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Exemple statique en attendant le dynamique -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg">Backend</h3>
                <p class="text-gray-600">Laravel, PHP, MySQL</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg">Frontend</h3>
                <p class="text-gray-600">TailwindCSS, Blade, JS</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg">Outils</h3>
                <p class="text-gray-600">Git, Docker, VS Code</p>
            </div>
        </div>
    </div>
</x-public-layout>
