@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 px-4">
    <!-- Page Title -->
    <h1 class="text-3xl font-bold text-center mb-6 text-teal-700">Check Loan Eligibility</h1>

    <!-- Loan Eligibility Form -->
    <form action="{{ route('loan.calculate.eligibility') }}" method="POST" class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-lg border border-teal-200">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-teal-700 mb-2">Full Name</label>
            <input type="text" id="name" name="name" class="w-full border border-teal-300 rounded-lg px-4 py-2 focus:ring-teal-500 focus:border-teal-500" required>
        </div>
        <div class="mb-4">
            <label for="mobile" class="block text-sm font-medium text-teal-700 mb-2">Mobile</label>
            <input type="text" id="mobile" name="mobile" class="w-full border border-teal-300 rounded-lg px-4 py-2 focus:ring-teal-500 focus:border-teal-500" required>
        </div>
        <div class="mb-4">
            <label for="income" class="block text-sm font-medium text-teal-700 mb-2">Monthly Income</label>
            <input type="number" id="income" name="income" class="w-full border border-teal-300 rounded-lg px-4 py-2 focus:ring-teal-500 focus:border-teal-500" required>
        </div>
        <div class="mb-4">
            <label for="expense" class="block text-sm font-medium text-teal-700 mb-2">Monthly Expenses</label>
            <input type="number" id="expense" name="expense" class="w-full border border-teal-300 rounded-lg px-4 py-2 focus:ring-teal-500 focus:border-teal-500" required>
        </div>
        <div class="mb-4">
            <label for="emi" class="block text-sm font-medium text-teal-700 mb-2">Existing Loan EMI</label>
            <input type="number" id="emi" name="emi" class="w-full border border-teal-300 rounded-lg px-4 py-2 focus:ring-teal-500 focus:border-teal-500" required>
        </div>
        <button type="submit" class="w-full bg-teal-500 text-white py-2 rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-opacity-50 transition duration-300">
            Check Eligibility
        </button>
    </form>

    <!-- Eligibility Result -->
    @isset($eligible)
        <div class="max-w-xl mx-auto mt-6 p-4 rounded-lg {{ $eligible ? 'bg-teal-100 border-teal-500' : 'bg-red-100 border-red-500' }} border">
            @if ($eligible)
                <p class="text-teal-700 font-medium">Your Debt-to-Income ratio (DTI) is {{ $dti }}%, which is below the 40% threshold. You are eligible for the loan!</p>
                <a href="{{ route('loan.calculate.emi.page') }}" class="mt-4 inline-block bg-teal-500 text-white py-2 px-4 rounded-lg hover:bg-teal-600 transition duration-300">Proceed to Calculate EMI</a>
            @else
                <p class="text-red-700 font-medium">Sorry, based on your current financial situation, you are not eligible for a loan. Your Debt-to-Income ratio (DTI) is {{ $dti }}%.</p>
            @endif
        </div>
    @endisset

    <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="POST" class="max-w-xl mx-auto mt-6">
        @csrf
        <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 transition duration-300">
            Logout
        </button>
    </form>
</div>
@endsection

@push('styles')
<style>
    /* Applying background gradient to the whole page */
    body {
        background: linear-gradient(135deg, #e0f7fa, #bbdefb);
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    @keyframes gradientAnimation {
        0% {
            background: linear-gradient(to right, #006064, #26a69a);
        }
        50% {
            background: linear-gradient(to right, #26a69a, #006064);
        }
        100% {
            background: linear-gradient(to right, #006064, #26a69a);
        }
    }

    .bg-gradient-animation {
        animation: gradientAnimation 10s ease infinite;
    }

    /* Modern Hover Effects */
    a:hover,
    button:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 20px;
        }

        .bg-white {
            padding: 4px;
        }

        .flex {
            flex-direction: column;
            align-items: center;
        }

        .w-full {
            max-width: 100%;
        }

        img {
            width: 60px;
            height: 60px;
        }
    }
</style>
@endpush
