<x-public-layout>
    <div class="py-24 relative z-10" x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="flex mb-8 text-gray-400 text-sm transition-all duration-700 transform"
                 :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-4'"
                 aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="hover:text-indigo-400 transition-colors">Accueil</a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-600 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <a href="{{ route('projects.index') }}" class="hover:text-indigo-400 ml-1 md:ml-2 transition-colors">Projets</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-600 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ml-1 md:ml-2 text-indigo-300 font-medium truncate max-w-[200px] md:max-w-none">{{ $project->title }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Header Section -->
                    <div class="transition-all duration-700 delay-100 transform"
                         :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 font-display leading-tight">{{ $project->title }}</h1>

                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-gray-700 group">
                            @if($project->thumbnail && file_exists(public_path($project->thumbnail)))
                                <img src="{{ asset($project->thumbnail) }}" alt="{{ $project->title }}" class="w-full object-cover transform transition duration-700 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-transparent to-transparent"></div>
                            @else
                                <div class="w-full h-96 bg-gray-800 flex items-center justify-center text-indigo-400/30">
                                    <svg class="w-32 h-32" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="prose prose-invert prose-lg max-w-none text-gray-300 transition-all duration-700 delay-200 transform"
                         :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                        {!! $project->content !!}
                    </div>

                    <!-- Code Snippet Section -->
                    @if(isset($project->code_snippet))
                        <div class="mt-12 transition-all duration-700 delay-250 transform"
                             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
                            <h3 class="text-2xl font-bold text-white mb-6 font-display border-l-4 border-indigo-500 pl-4">Extrait de Code</h3>
                            <div class="relative rounded-xl overflow-hidden bg-[#1e1e1e] border border-gray-700 shadow-2xl group">
                                <div class="flex items-center justify-between px-4 py-2 bg-[#252526] border-b border-gray-700">
                                    <div class="flex space-x-2">
                                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                    </div>
                                    <span class="text-xs text-gray-400 font-mono">{{ $project->code_filename ?? 'Code Source' }}</span>
                                </div>
                                <div class="p-4 overflow-x-auto">
                                    <pre><code class="language-{{ $project->code_language ?? 'php' }} text-sm font-mono text-gray-300">{{ $project->code_snippet }}</code></pre>
                                </div>
                                <div class="absolute top-12 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button class="text-xs bg-gray-700 text-white px-2 py-1 rounded hover:bg-gray-600 transition" onclick="navigator.clipboard.writeText(this.parentElement.previousElementSibling.innerText)">Copier</button>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Gallery -->
                    @if(!empty($project->images))
                        <div class="mt-12 transition-all duration-700 delay-300 transform"
                             :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                             x-data="{ lightboxOpen: false, activeImage: '' }">
                            <h3 class="text-2xl font-bold text-white mb-6 font-display border-l-4 border-indigo-500 pl-4">Galerie</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                @foreach($project->images as $image)
                                    @php
                                        $isUrl = str_starts_with($image->image_path, 'http');
                                        $imageSrc = $isUrl ? $image->image_path : asset($image->image_path);
                                        $showImage = $isUrl || file_exists(public_path($image->image_path));
                                    @endphp

                                    @if($showImage)
                                        <div class="rounded-xl overflow-hidden border border-gray-700 shadow-lg group cursor-pointer hover:border-indigo-500/50 transition-colors relative"
                                             @click="lightboxOpen = true; activeImage = '{{ $imageSrc }}'">
                                            <img src="{{ $imageSrc }}" alt="Capture d'écran" class="w-full h-48 object-cover transform transition duration-500 group-hover:scale-110">
                                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <!-- Lightbox Modal -->
                            <div x-show="lightboxOpen"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="transition ease-in duration-200"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0"
                                 class="fixed inset-0 z-[9999] bg-black/90 flex items-center justify-center p-4"
                                 @keydown.escape.window="lightboxOpen = false">
                                <div class="relative max-w-5xl w-full max-h-screen" @click.away="lightboxOpen = false">
                                    <button @click="lightboxOpen = false" class="absolute -top-12 right-0 text-white hover:text-indigo-400 transition">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                    </button>
                                    <img :src="activeImage" class="w-full h-auto max-h-[85vh] object-contain rounded-lg shadow-2xl border border-gray-800">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1 space-y-8 transition-all duration-700 delay-400 transform"
                     :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10'">

                    <!-- Project Info Card -->
                    <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-6 border border-gray-700 shadow-xl">
                        <h3 class="text-xl font-bold text-white mb-6 font-display flex items-center">
                            <svg class="w-5 h-5 mr-2 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Informations
                        </h3>
                        <div class="space-y-6">
                            <div>
                                <span class="block text-sm text-gray-500 uppercase tracking-wider mb-1">Date de publication</span>
                                <span class="font-medium text-white flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    {{ $project->published_at->format('d F Y') }}
                                </span>
                            </div>
                            <div>
                                <span class="block text-sm text-gray-500 uppercase tracking-wider mb-2">Technologies</span>
                                <div class="flex flex-wrap gap-2">
                                    @foreach($project->categories as $category)
                                        <span class="bg-indigo-900/50 text-indigo-300 text-xs font-bold px-3 py-1 rounded-full border border-indigo-500/30 hover:bg-indigo-800/50 transition-colors cursor-default">
                                            {{ $category->name }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Links Card -->
                    <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-6 border border-gray-700 shadow-xl">
                        <h3 class="text-xl font-bold text-white mb-6 font-display flex items-center">
                            <svg class="w-5 h-5 mr-2 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                            Liens du projet
                        </h3>
                        <div class="space-y-4">
                            @if($project->url_demo)
                                <a href="{{ $project->url_demo }}" target="_blank" class="magnetic-btn flex items-center justify-center w-full bg-indigo-600 text-white px-4 py-3 rounded-xl hover:bg-indigo-500 transition-all duration-300 shadow-lg hover:shadow-indigo-500/40 group">
                                    <span class="flex items-center transition-transform duration-300">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                        Voir la démo live
                                    </span>
                                </a>
                            @endif

                            @if($project->url_repo)
                                <a href="{{ $project->url_repo }}" target="_blank" class="magnetic-btn flex items-center justify-center w-full bg-gray-900 text-white px-4 py-3 rounded-xl border border-gray-600 hover:bg-gray-800 transition-all duration-300 shadow-lg group">
                                    <span class="flex items-center transition-transform duration-300">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.48 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                                        Voir le code source
                                    </span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
