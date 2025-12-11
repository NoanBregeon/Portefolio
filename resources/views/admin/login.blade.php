<x-public-layout>
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md border border-gray-700">
            <h2 class="text-2xl font-bold text-white mb-6 text-center">Connexion Admin</h2>

            @if ($errors->any())
                <div class="bg-red-600 text-white p-3 rounded mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-300 mb-2">Email</label>
                    <input type="email" name="email" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 focus:border-indigo-500 focus:ring-indigo-500" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-300 mb-2">Mot de passe</label>
                    <input type="password" name="password" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 focus:border-indigo-500 focus:ring-indigo-500" required>
                </div>
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded transition">
                    Se connecter
                </button>
            </form>
        </div>
    </div>
</x-public-layout>
