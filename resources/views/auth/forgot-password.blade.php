<x-guest-layout>
    <div class="mb-4 text-sm text-teal-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="bg-white p-6 rounded-lg shadow-lg border border-teal-200">
        @csrf

        <!-- Email Address -->
        <div class="mb-6">
            <x-input-label for="email" :value="__('Email')" class="text-teal-700 font-semibold" />

            <x-text-input id="email" class="block mt-1 w-full border border-teal-300 rounded-lg px-4 py-2 focus:ring-teal-500 focus:border-teal-500"
                            type="email" 
                            name="email" 
                            :value="old('email')" 
                            required autofocus />

            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button class="bg-teal-600 text-white hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-opacity-50">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
