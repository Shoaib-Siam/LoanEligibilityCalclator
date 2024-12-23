<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

<<<<<<< HEAD
        <title>ABCD Bank</title>
=======
        <title>{{ config('app.name', 'ABCD Bank') }}</title>
>>>>>>> 5cd0ed7bf1937a371dda95d7d9e7255f2fa417da

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Tailwind CSS CDN (for quick styling) -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            /* Custom Branding Styles */
            body {
                font-family: 'Figtree', sans-serif;
                background-color: #e0f7fa; /* Soft Blue background */
            }
            .logo {
                width: 80px;
                height: 80px;
                fill: #006064; /* Bank's teal color */
            }
            .container {
                background-color: #ffffff;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
            }
            .heading {
                text-align: center;
                font-size: 2rem;
                font-weight: 700;
                color: #006064; /* Bank's teal color */
            }
            .description {
                text-align: center;
                font-size: 1rem;
                color: #00796b;
                margin-top: 10px;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
<<<<<<< HEAD

=======
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
>>>>>>> 5cd0ed7bf1937a371dda95d7d9e7255f2fa417da
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="text-center mb-6">
                <a href="/">
                    <!-- Custom ABCD Bank Logo -->
                    <x-application-logo class="logo" />
                </a>
                <h1 class="text-4xl font-bold mt-4">Welcome to ABCD Bank</h1>
                <p class="text-lg mt-2">Your trusted financial partner for loans, savings, and investments.</p>
            </div>

<<<<<<< HEAD
            <!-- Main Container -->
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg container">
                <!-- ABCD Bank Heading -->
                <h1 class="heading">Welcome to ABCD Bank</h1>
                <p class="description">Your Trusted Partner for Secure and Easy Banking</p>

                <!-- Dynamic Content Slot -->
=======
            <!-- Main Content Slot -->
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
>>>>>>> 5cd0ed7bf1937a371dda95d7d9e7255f2fa417da
                {{ $slot }}
            </div>
        </div>

<<<<<<< HEAD
=======
        <!-- Footer -->
        <footer class="bg-blue-500 text-white py-6">
            <div class="container mx-auto text-center">
                <p>&copy; 2024 ABCD Bank. All rights reserved.</p>
            </div>
        </footer>
>>>>>>> 5cd0ed7bf1937a371dda95d7d9e7255f2fa417da
    </body>
</html>
