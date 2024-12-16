@extends('layouts.app')

@section('content')
<div class="container mx-auto text-center mt-20 px-4">
    <h1 class="text-4xl font-bold mb-6 text-gray-800">Welcome to Your Dashboard</h1>
    <div class="flex justify-center items-center space-x-4 mt-6">
        <!-- Check Eligibility Button -->
        <a href="{{ route('loan.eligibility') }}" class="bg-blue-500 text-white font-medium px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 transition duration-300">
            Check Eligibility
        </a>
        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="bg-red-500 text-white font-medium px-6 py-3 rounded-lg shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75 transition duration-300">
                Logout
            </button>
        </form>
    </div>
</div>
@endsection
