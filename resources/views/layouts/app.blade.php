<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Hidden Admin Login -->
            <div class="fixed bottom-0 right-0 p-2 opacity-0 hover:opacity-100 transition-opacity duration-500">
                <a href="{{ route('login') }}" class="text-gray-800 text-xs">Admin</a>
            </div>
            <!-- Bouton Accessibilité -->
            <button id="accessibility-toggle" class="fixed bottom-4 left-4 z-50 bg-white border border-gray-300 shadow-lg rounded-full px-4 py-2 text-sm font-semibold transition-colors duration-300 hover:bg-blue-100 focus:outline-none">
                Mode accessible
            </button>
        </div>
    </body>
</html>
