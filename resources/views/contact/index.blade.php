<x-public-layout>
    <div class="py-24 relative z-10" x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 transition-all duration-700 ease-out"
             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            <div class="bg-gray-800/50 backdrop-blur-md border border-gray-700 p-8 rounded-2xl shadow-2xl">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-white mb-2 font-display">Contactez-moi</h1>
                    <p class="text-gray-400">Une question, un projet ou une opportunité ? N'hésitez pas !</p>
                </div>

                @if(session('success'))
                    <div class="bg-green-900/50 border border-green-500/50 text-green-300 px-4 py-3 rounded-lg mb-6 flex items-center animate-pulse-slow">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="group">
                        <label for="name" class="block text-sm font-medium text-gray-300 mb-2 group-focus-within:text-indigo-400 transition-colors">Nom</label>
                        <input type="text" name="name" id="name"
                               class="w-full bg-gray-900/50 border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-500
                                      focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:shadow-[0_0_15px_rgba(99,102,241,0.5)]
                                      focus:scale-[1.02] transition-all duration-300 ease-out transform origin-center"
                               placeholder="Votre nom" required>
                    </div>

                    <div class="group">
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-2 group-focus-within:text-indigo-400 transition-colors">Email</label>
                        <input type="email" name="email" id="email"
                               class="w-full bg-gray-900/50 border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-500
                                      focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:shadow-[0_0_15px_rgba(99,102,241,0.5)]
                                      focus:scale-[1.02] transition-all duration-300 ease-out transform origin-center"
                               placeholder="votre@email.com" required>
                    </div>

                    <div class="group">
                        <label for="message" class="block text-sm font-medium text-gray-300 mb-2 group-focus-within:text-indigo-400 transition-colors">Message</label>
                        <textarea name="message" id="message" rows="5"
                                  class="w-full bg-gray-900/50 border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-500
                                         focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:shadow-[0_0_15px_rgba(99,102,241,0.5)]
                                         focus:scale-[1.02] transition-all duration-300 ease-out transform origin-center"
                                  placeholder="Votre message..." required></textarea>
                    </div>

                    <button type="submit"
                            class="magnetic-btn w-full bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg
                                   hover:shadow-[0_0_20px_rgba(99,102,241,0.4)] transition duration-300 active:scale-95">
                        <span class="block transition-transform duration-300">Envoyer le message</span>
                    </button>
                </form>

                <div class="mt-8 pt-8 border-t border-gray-700 flex justify-center space-x-6">
                    <a href="https://github.com/NoanBregeon" target="_blank" class="text-gray-400 hover:text-white transition hover:scale-110 duration-300">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                    </a>
                    <a href="mailto:contact@noanbregeon.fr" class="text-gray-400 hover:text-white transition hover:scale-110 duration-300">
                        <span class="sr-only">Email</span>
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
