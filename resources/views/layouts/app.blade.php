<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Welcome to ABCD Bank')</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="bg-blue-500 text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-2xl font-bold">ABCD Bank</h1>
        </div>
    </header>

    <!-- Main Wrapper -->
    <div class="min-h-screen flex items-center justify-center">
        <!-- Content Container -->
        <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg p-8">
            <!-- Dynamic Content -->
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 ABCD Bank. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
