<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ABCD Bank</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #006064, #26a69a);
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .background-circles {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            animation: float 6s ease-in-out infinite;
        }

        .circle.small {
            width: 120px;
            height: 120px;
            top: 10%;
            left: 15%;
            animation-duration: 6s;
        }

        .circle.medium {
            width: 180px;
            height: 180px;
            bottom: 20%;
            right: 15%;
            animation-duration: 8s;
        }

        .circle.large {
            width: 240px;
            height: 240px;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation-duration: 12s;
        }

        @keyframes float {
            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-25px);
            }
        }

        .container {
            display: flex;
            width: 85%;
            max-width: 1100px;
            height: 75%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .left-section {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .right-section {
            flex: 1;
            background: linear-gradient(135deg, #bbdefb, #e3f2fd);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px;
        }

        .right-section h2 {
            font-size: 30px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .right-section p {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
        }

        .login-container h1 {
            font-size: 26px;
            font-weight: 600;
            color: #333;
            margin-bottom: 24px;
        }

        .login-container input {
            width: 100%;
            padding: 14px;
            margin-bottom: 18px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 15px;
        }

        .login-container input:focus {
            outline: none;
            border-color: #26a69a;
            box-shadow: 0 0 0 2px rgba(38, 166, 154, 0.3);
        }

        .login-container button {
            width: 100%;
            padding: 14px;
            background-color: #26a69a;
            color: white;
            font-size: 17px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container button:hover {
            background-color: #00796b;
        }

        .login-container .footer {
            margin-top: 16px;
            font-size: 14px;
            text-align: center;
        }

        .login-container .footer a {
            color: #26a69a;
            text-decoration: none;
        }

        .login-container .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="background-circles">
        <div class="circle small"></div>
        <div class="circle medium"></div>
        <div class="circle large"></div>
    </div>

    <div class="container">
        <div class="left-section">
            <div class="login-container mt-6">
                <h1>Welcome Back</h1>
                <!-- Updated Form -->
                <form method="POST" action="{{ route('login') }}" class="w-full">
                    @csrf
                    <!-- Email Input -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input 
                            id="email" 
                            class="block mt-1 w-full" 
                            type="email" 
                            name="email" 
                            :value="old('email')" 
                            required 
                            autofocus 
                            autocomplete="username" 
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password Input -->
                    <div class="mb-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input 
                            id="password" 
                            class="block mt-1 w-full" 
                            type="password" 
                            name="password" 
                            required 
                            autocomplete="current-password" 
                        />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input 
                                id="remember_me" 
                                type="checkbox" 
                                class="rounded border-gray-300 text-teal-600 shadow-sm focus:ring-teal-500" 
                                name="remember"
                            />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-primary-button class="ms-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>

                <!-- Custom Message after login -->
                <div class="mt-4">
                    <p class="text-center text-sm">
                        Don't have an account? <a href="{{ route('register') }}" class="underline text-teal-600 hover:text-teal-900">{{ __('Register here') }}</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="right-section">
            <div class="relative z-10 text-white px-10 text-center">
                <h2 class="text-4xl font-bold mb-4">Simplifying Your Banking Experience</h2>
                <p class="text-lg mb-6">
                    Secure, fast, and innovative banking solutions at your fingertips. Access your financial freedom today.
                </p>
            </div>
        </div>
    </div>
</body>

</html>
