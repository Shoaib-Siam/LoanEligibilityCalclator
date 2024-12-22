<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABCD Bank - Your Trusted Financial Partner</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Add Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-blue-500 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">ABCD Bank</a>
            <div class="space-x-6">
                <a href="#services" class="hover:underline">Services</a>
                <a href="#about" class="hover:underline">About Us</a>
                <a href="#contact" class="hover:underline">Contact</a>
                <a href="{{ route('login') }}" class="bg-white text-blue-500 px-4 py-2 rounded hover:bg-gray-100">Login</a>
                <a href="{{ route('register') }}" class="bg-gray-200 text-blue-500 px-4 py-2 rounded hover:bg-gray-300">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-gray-200 py-16 text-center">
        <h1 class="text-5xl font-bold mb-4">Welcome to ABCD Bank</h1>
        <p class="text-xl mb-6">Your trusted financial partner for loans, savings, and investments.</p>
        <a href="#services" class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600">Explore Our Services</a>
    </header>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-gray-100 rounded shadow">
                    <h3 class="text-2xl font-bold mb-4">Personal Loans</h3>
                    <p class="text-gray-600">Flexible personal loans with competitive interest rates.</p>
                </div>
                <div class="p-6 bg-gray-100 rounded shadow">
                    <h3 class="text-2xl font-bold mb-4">Savings Accounts</h3>
                    <p class="text-gray-600">Grow your savings with high-interest accounts tailored to your needs.</p>
                </div>
                <div class="p-6 bg-gray-100 rounded shadow">
                    <h3 class="text-2xl font-bold mb-4">Investment Plans</h3>
                    <p class="text-gray-600">Secure your future with our diverse investment options.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">About Us</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">At ABCD Bank, we are committed to providing excellent financial services to our customers. With a history of trust and reliability, we aim to empower individuals and businesses to achieve their financial goals.</p>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">What Our Customers Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="p-6 bg-gray-100 rounded shadow">
                    <p class="text-gray-600 italic">"ABCD Bank made it so easy to get a personal loan. The process was quick and hassle-free!"</p>
                    <h4 class="text-xl font-bold mt-4">- Jane Doe</h4>
                </div>
                <div class="p-6 bg-gray-100 rounded shadow">
                    <p class="text-gray-600 italic">"Their savings account options are the best in the market. Highly recommended!"</p>
                    <h4 class="text-xl font-bold mt-4">- John Smith</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Contact Us</h2>
            <p class="text-gray-600 mb-4">Have questions? Reach out to us, and we'll be happy to help!</p>
            <a href="mailto:info@abcd.com" class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600">Email Us</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 ABCD Bank. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
