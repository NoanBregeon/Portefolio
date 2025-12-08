<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Portfolio') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900 bg-gray-100">
        <div class="min-h-screen flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex justify-between items-center">
                    <div class="text-2xl font-bold text-indigo-600">
                        <a href="{{ route('home') }}">Mon Portfolio</a>
                    </div>
                    <nav class="space-x-4">
                        <a href="{{ route('home') }}" class="text-gray-600 hover:text-indigo-600">Accueil</a>
                        <a href="{{ route('projects.index') }}" class="text-gray-600 hover:text-indigo-600">Projets</a>
                        <a href="{{ route('articles.index') }}" class="text-gray-600 hover:text-indigo-600">Articles</a>
                        <a href="{{ route('contact.index') }}" class="text-gray-600 hover:text-indigo-600">Contact</a>
                    </nav>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-gray-800 text-white py-6">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    &copy; {{ date('Y') }} Mon Portfolio. Tous droits réservés.
                </div>
            </footer>
        </div>
    </body>
</html>
