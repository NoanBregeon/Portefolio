<x-public-layout>
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Contactez-moi</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nom</label>
                <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>

            <div class="mb-6">
                <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                <textarea name="message" id="message" rows="5" class="w-full border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
            </div>

            <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition w-full">Envoyer</button>
        </form>
    </div>
</x-public-layout>
