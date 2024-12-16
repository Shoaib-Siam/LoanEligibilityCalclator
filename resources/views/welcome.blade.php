<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to ABCD Bank</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Add Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto text-center mt-20">
        <h1 class="text-4xl font-bold mb-4">WELCOME TO ABCD BANK</h1>
        <p class="text-lg mb-4">To check your loan eligibility, please login or register.</p>
        <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Login</a>
        <a href="{{ route('register') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 ml-4">Register</a>
    </div>
</body>
</html>