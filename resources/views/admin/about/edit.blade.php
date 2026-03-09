<x-public-layout>
    <div class="pt-24 pb-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-white">Modifier la page "À propos"</h1>
            <a href="{{ route('admin.dashboard') }}" class="text-indigo-400 hover:text-indigo-300 transition">Retour au tableau de bord</a>
        </div>

        @if(session('success'))
            <div class="bg-green-600 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-gray-800 rounded-lg shadow-xl border border-gray-700 p-6">
            <form action="{{ route('admin.about.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label for="about_introduction" class="block text-sm font-medium text-gray-300 mb-2">Texte de présentation</label>
                    <textarea name="about_introduction" id="about_introduction" rows="10" 
                        class="w-full bg-gray-900 border border-gray-700 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">{{ old('about_introduction', $aboutText) }}</textarea>
                    <div class="mt-2 text-sm text-gray-500">
                        Vous pouvez utiliser du HTML simple (comme des balises <code>&lt;strong&gt;</code> ou <code>&lt;p&gt;</code>) pour formater votre texte.
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded-md transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-public-layout>
