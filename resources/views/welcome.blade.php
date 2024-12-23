<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABCD Bank - Your Trusted Financial Partner</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        .header-font {
            font-family: 'Poppins', sans-serif;
        }

        .btn-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease-in-out;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #006064, #26a69a);
            background-size: 200% 200%;
            animation: gradientMove 8s infinite alternate;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        .floating-shapes {
            position: relative;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 50%;
        }

        .shape.one {
            width: 140px;
            height: 140px;
            top: 10%;
            left: 8%;
        }

        .shape.two {
            width: 180px;
            height: 180px;
            bottom: 15%;
            right: 12%;
        }

        .shape.three {
            width: 90px;
            height: 90px;
            bottom: 8%;
            left: 30%;
        }
    </style>
</head>
<<<<<<< HEAD
<body class="bg-gray-50">

    <!-- Navigation Bar -->
    <header class="gradient-bg shadow-lg">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-bold text-white header-font">ABCD Bank</h1>
            <nav class="space-x-6 flex-grow flex justify-center">
                <a href="#" class="text-white hover:text-gray-200">Corporate</a>
                <a href="#" class="text-white hover:text-gray-200">Investment</a>
                <a href="#" class="text-white hover:text-gray-200">Personal</a>
                <a href="#" class="text-white hover:text-gray-200">About Us</a>
            </nav>
            <a href="{{ route('login') }}" class="bg-white text-teal-600 px-4 py-2 rounded-lg hover:bg-gray-100">Login</a>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="flex items-center justify-center min-h-screen gradient-bg floating-shapes">
        <div class="max-w-2xl text-center">
            <h1 class="text-5xl font-bold header-font mb-6 text-white">Secure Your Financial Future</h1>
            <p class="text-lg mb-8 text-white">Empowering you with tailored banking solutions for every stage of life.</p>
            <a href="{{ route('register') }}" class="bg-teal-500 text-white px-8 py-3 rounded-lg shadow-lg hover:bg-teal-600 transition duration-300 ease-in-out">
                {{ __('Get Started') }}
            </a>
        </div>

        <!-- Shapes -->
        <div class="shape one"></div>
        <div class="shape two"></div>
        <div class="shape three"></div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-gray-900 text-gray-300 py-10">
        <div class="container mx-auto px-6 md:grid md:grid-cols-3 md:gap-8">
            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-500">Corporate Banking</a></li>
                    <li><a href="#" class="hover:text-gray-500">Investment Services</a></li>
                    <li><a href="#" class="hover:text-gray-500">Savings Accounts</a></li>
                    <li><a href="#" class="hover:text-gray-500">Contact Us</a></li>
                </ul>
            </div>
            <!-- Contact Information -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                <ul class="space-y-2">
                    <li>Phone: <a href="tel:+9876543210" class="hover:text-gray-500">+1 (987) 654-3210</a></li>
                    <li>Email: <a href="mailto:support@abcdbank.com" class="hover:text-gray-500">support@abcdbank.com</a></li>
                    <li>Address: 5678 Finance Lane, City, State, ZIP</li>
                </ul>
            </div>
            <!-- Social Media -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                <ul class="flex space-x-4">
                    <li><a href="https://www.facebook.com/shoaib.siam.881/" class="text-gray-500 hover:text-white">Facebook</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-white">Twitter</a></li>
                    <li><a href="https://www.linkedin.com/in/shoaib-siam/" class="text-gray-500 hover:text-white">LinkedIn</a></li>
                    <li><a href="https://www.instagram.com/siam_s_gram/" class="text-gray-500 hover:text-white">Instagram</a></li>
                </ul>
            </div>
        </div>
        <!-- Copyright -->
        <div class="mt-8 text-center text-sm text-gray-500">
            © 2024 ABCD Bank. All rights reserved.
        </div>
    </footer>

=======
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
>>>>>>> 5cd0ed7bf1937a371dda95d7d9e7255f2fa417da
</body>
</html>
