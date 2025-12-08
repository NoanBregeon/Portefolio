<x-public-layout>
    <div class="bg-white py-12">
        <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <header class="mb-10 text-center">
                <div class="flex items-center justify-center space-x-2 text-sm text-gray-500 mb-4">
                    <span class="flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        {{ $article->published_at->format('d F Y') }}
                    </span>
                    <span>&bull;</span>
                    <span>Article de blog</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                    {{ $article->title }}
                </h1>
            </header>

            <!-- Featured Image -->
            @if($article->thumbnail && file_exists(public_path($article->thumbnail)))
                <div class="mb-10 rounded-2xl overflow-hidden shadow-lg">
                    <img src="{{ asset($article->thumbnail) }}" alt="{{ $article->title }}" class="w-full object-cover max-h-[500px]">
                </div>
            @endif

            <!-- Content -->
            <div class="prose prose-lg prose-indigo mx-auto text-gray-700">
                {!! $article->content !!}
            </div>

            <!-- Footer / Navigation -->
            <div class="mt-16 pt-8 border-t border-gray-200">
                <div class="flex justify-between items-center">
                    <a href="{{ route('articles.index') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        Retour aux articles
                    </a>

                    <!-- Share buttons could go here -->
                </div>
            </div>
        </article>
    </div>
</x-public-layout>
