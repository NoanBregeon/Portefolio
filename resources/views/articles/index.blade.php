<x-public-layout>
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-4">
                    Blog & Articles
                </h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Mes réflexions sur le développement web, les technologies et mes retours d'expérience.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($articles as $article)
                    <article class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition duration-300 overflow-hidden border border-gray-100 flex flex-col h-full">
                        <a href="{{ route('articles.show', $article->slug) }}" class="block relative h-48 overflow-hidden bg-gray-200">
                            @if($article->thumbnail && file_exists(public_path($article->thumbnail)))
                                <img src="{{ asset($article->thumbnail) }}" alt="{{ $article->title }}" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-indigo-50 text-indigo-300">
                                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                                </div>
                            @endif
                        </a>
                        <div class="p-6 flex-grow flex flex-col">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                {{ $article->published_at->format('d M Y') }}
                            </div>
                            <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-indigo-600 transition">
                                <a href="{{ route('articles.show', $article->slug) }}">
                                    {{ $article->title }}
                                </a>
                            </h2>
                            <p class="text-gray-600 mb-4 line-clamp-3 flex-grow">
                                {{ $article->excerpt }}
                            </p>
                            <div class="mt-auto pt-4 border-t border-gray-100">
                                <a href="{{ route('articles.show', $article->slug) }}" class="text-indigo-600 font-medium hover:text-indigo-800 flex items-center">
                                    Lire l'article
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full text-center py-12">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 mb-4">
                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Aucun article pour le moment</h3>
                        <p class="mt-1 text-gray-500">Revenez bientôt pour lire mes nouveaux articles !</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-public-layout>
