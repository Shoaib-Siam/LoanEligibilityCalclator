<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ABCD Bank</title>

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

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <!-- Custom ABCD Bank Logo -->
                    <x-application-logo class="logo" />
                </a>
            </div>

            <!-- Main Container -->
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg container">
                <!-- ABCD Bank Heading -->
                <h1 class="heading">Welcome to ABCD Bank</h1>
                <p class="description">Your Trusted Partner for Secure and Easy Banking</p>

                <!-- Dynamic Content Slot -->
                {{ $slot }}
            </div>
        </div>

    </body>
</html>
