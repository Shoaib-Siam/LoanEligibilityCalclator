<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Welcome to ABCD Bank')</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Custom animation for background gradient */
        @keyframes gradientAnimation {
            0% {
                background: linear-gradient(135deg, #006064, #26a69a);
            }
            50% {
                background: linear-gradient(135deg, #26a69a, #006064);
            }
            100% {
                background: linear-gradient(135deg, #006064, #26a69a);
            }
        }

        /* Custom fade-in effect for content */
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .bg-gradient-animation {
            animation: gradientAnimation 10s ease infinite;
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out;
        }

        /* Style for main container */
        .main-container {
            background: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 2rem;
            margin-top: 10vh;
            position: relative;
        }

        /* Bank brand styling */
        .bank-header {
            text-align: center;
            color: #006064;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .bank-subheading {
            text-align: center;
            color: #26a69a;
            font-size: 1.25rem;
            font-weight: 600;
        }

        /* Custom button styles */
        .btn-primary {
            background-color: #26a69a;
            color: white;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #00796b;
        }

        .btn-link {
            color: #006064;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        /* Styling for footer link */
        .footer-link {
            text-align: center;
            font-size: 14px;
            color: #006064;
        }

        .footer-link a {
            color: #006064;
            text-decoration: none;
        }

        .footer-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<<<<<<< HEAD
<body class="bg-gradient-animation text-white">
=======
<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="bg-blue-500 text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-2xl font-bold">ABCD Bank</h1>
        </div>
    </header>
>>>>>>> 5cd0ed7bf1937a371dda95d7d9e7255f2fa417da

    <!-- Main Wrapper -->
    <div class="min-h-screen flex items-center justify-center px-4">
        <!-- Content Container -->
        <div class="w-full max-w-4xl bg-white shadow-xl rounded-lg p-8 transition-transform duration-500 transform hover:scale-105 animate-fade-in main-container">
            <!-- Bank Header -->
            <div class="bank-header">
                ABCD Bank
            </div>

            <!-- Subheading for Registration -->
            <div class="bank-subheading">
                Secure and Easy Banking at Your Fingertips
            </div>

            <!-- Dynamic Content -->
            @yield('content')

            {{-- <!-- Footer Links -->
            <div class="footer-link mt-6">
                <p>Already have an account? <a href="{{ route('login') }}" class="btn-link">Log in here</a></p>
            </div>
        </div>
<<<<<<< HEAD
    </div> --}}

    <script>
        // Add custom fade-in animation to body after page load
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelector('body').classList.add('animate-fade-in');
        });
    </script>
=======
    </div>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 ABCD Bank. All rights reserved.</p>
        </div>
    </footer>
>>>>>>> 5cd0ed7bf1937a371dda95d7d9e7255f2fa417da
</body>
</html>
