<x-public-layout>
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="flex mb-8 text-gray-500 text-sm" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="hover:text-indigo-600">Accueil</a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <a href="{{ route('projects.index') }}" class="hover:text-indigo-600 ml-1 md:ml-2">Projets</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ml-1 md:ml-2 text-gray-700 font-medium">{{ $project->title }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <h1 class="text-4xl font-bold text-gray-900 mb-6">{{ $project->title }}</h1>

                    @if($project->thumbnail && file_exists(public_path($project->thumbnail)))
                        <img src="{{ asset($project->thumbnail) }}" alt="{{ $project->title }}" class="w-full rounded-xl shadow-lg mb-8">
                    @else
                        <div class="w-full h-64 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-300 mb-8">
                            <svg class="w-24 h-24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    @endif

                    <div class="prose prose-indigo max-w-none text-gray-700">
                        {!! $project->content !!}
                    </div>

                    <!-- Gallery -->
                    @if(!empty($project->images))
                        <div class="mt-12">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Galerie</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach($project->images as $image)
                                    @if(file_exists(public_path($image->image_path)))
                                        <img src="{{ asset($image->image_path) }}" alt="Capture d'écran" class="rounded-lg shadow-md hover:shadow-xl transition duration-300 cursor-pointer">
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1 space-y-8">
                    <!-- Project Info -->
                    <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Informations</h3>
                        <div class="space-y-4">
                            <div>
                                <span class="block text-sm text-gray-500">Date de publication</span>
                                <span class="font-medium text-gray-900">{{ $project->published_at->format('d F Y') }}</span>
                            </div>
                            <div>
                                <span class="block text-sm text-gray-500">Catégories</span>
                                <div class="flex flex-wrap gap-2 mt-1">
                                    @foreach($project->categories as $category)
                                        <span class="bg-indigo-100 text-indigo-700 text-xs font-bold px-3 py-1 rounded-full">
                                            {{ $category->name }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Links -->
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Liens du projet</h3>
                        <div class="space-y-3">
                            @if($project->url_demo)
                                <a href="{{ $project->url_demo }}" target="_blank" class="flex items-center justify-center w-full bg-indigo-600 text-white px-4 py-3 rounded-lg hover:bg-indigo-700 transition font-semibold">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                    Voir la démo live
                                </a>
                            @endif

                            @if($project->url_repo)
                                <a href="{{ $project->url_repo }}" target="_blank" class="flex items-center justify-center w-full bg-gray-800 text-white px-4 py-3 rounded-lg hover:bg-gray-900 transition font-semibold">
                                    <i class="fa-brands fa-github mr-2 text-xl"></i>
                                    Voir le code source
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
