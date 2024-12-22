<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ABCD Bank') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- Navbar -->
        <nav class="bg-blue-500 text-white py-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/" class="text-2xl font-bold">ABCD Bank</a>
                <div class="space-x-6">
                    <a href="/services" class="hover:underline">Services</a>
                    <a href="/about" class="hover:underline">About Us</a>
                    <a href="/contact" class="hover:underline">Contact</a>
                    <a href="{{ route('login') }}" class="bg-white text-blue-500 px-4 py-2 rounded hover:bg-gray-100">Login</a>
                    <a href="{{ route('register') }}" class="bg-gray-200 text-blue-500 px-4 py-2 rounded hover:bg-gray-300">Register</a>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="text-center mb-6">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
                <h1 class="text-4xl font-bold mt-4">Welcome to ABCD Bank</h1>
                <p class="text-lg mt-2">Your trusted financial partner for loans, savings, and investments.</p>
            </div>

            <!-- Main Content Slot -->
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-blue-500 text-white py-6">
            <div class="container mx-auto text-center">
                <p>&copy; 2024 ABCD Bank. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
