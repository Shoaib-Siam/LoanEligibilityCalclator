@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-teal-100 to-blue-50">
    <div class="w-full max-w-xl bg-white p-8 rounded-lg shadow-lg border border-teal-200">
        <!-- Page Title -->
        <h1 class="text-2xl font-bold text-center text-teal-700 mb-6">Calculate EMI</h1>

        <!-- EMI Calculation Form -->
        <form action="{{ route('loan.calculate.emi') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="loan_amount" class="block text-sm font-medium text-teal-700 mb-2">Loan Amount</label>
                <input type="number" id="loan_amount" name="loan_amount" class="w-full border border-teal-300 rounded-lg px-4 py-2 text-gray-800 bg-teal-50 focus:ring-teal-500 focus:border-teal-500" required>
            </div>
            <div>
                <label for="interest_rate" class="block text-sm font-medium text-teal-700 mb-2">Interest Rate (%)</label>
                <input type="number" id="interest_rate" name="interest_rate" class="w-full border border-teal-300 rounded-lg px-4 py-2 text-gray-800 bg-teal-50 focus:ring-teal-500 focus:border-teal-500" required>
            </div>
            <div>
                <label for="loan_tenure" class="block text-sm font-medium text-teal-700 mb-2">Loan Tenure (Years)</label>
                <input type="number" id="loan_tenure" name="loan_tenure" class="w-full border border-teal-300 rounded-lg px-4 py-2 text-gray-800 bg-teal-50 focus:ring-teal-500 focus:border-teal-500" required>
            </div>
            <button type="submit" class="w-full bg-teal-600 text-white py-2 rounded-lg hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-opacity-50 transition duration-300">
                Calculate EMI
            </button>
        </form>

        <!-- EMI Result -->
        @isset($emi)
            <div class="mt-6 bg-teal-100 border border-teal-500 text-teal-700 p-4 rounded-lg">
                <p class="text-center font-medium">Your monthly EMI for the loan is {{ $emi }} TK.</p>
            </div>
        @endisset

        <!-- Action Buttons -->
        <div class="mt-8 flex justify-between gap-4">
            <!-- Check Loan Eligibility Button -->
            <a href="{{ route('loan.eligibility') }}" class="w-1/2 text-center bg-teal-500 text-white py-2 rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-opacity-50 transition duration-300">
                Check Loan Eligibility
            </a>

            <!-- Logout Button -->
            <form action="{{ route('logout') }}" method="POST" class="w-1/2">
                @csrf
                <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 transition duration-300">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Ensure Text Inside Inputs Is Visible */
    input {
        color: #374151; /* Dark text color */
    }

    input:focus {
        color: #1f2937; /* Focused text color */
        background-color: #f9fafb; /* Light background on focus */
        border-color: #0f4c75; /* Darker border on focus */
    }

    /* Background Gradient for Page */
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

    /* Hover Effects for buttons */
    a:hover,
    button:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Responsive Design for Mobile */
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
