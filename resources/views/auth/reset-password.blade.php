<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}" class="bg-white p-6 rounded-lg shadow-lg border border-teal-200">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="mb-6">
            <x-input-label for="email" :value="__('Email')" class="text-teal-700 font-semibold" />

            <x-text-input id="email" class="block mt-1 w-full border border-teal-300 rounded-lg px-4 py-2 focus:ring-teal-500 focus:border-teal-500"
                            type="email" 
                            name="email" 
                            :value="old('email', $request->email)" 
                            required autofocus autocomplete="username" />

            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-teal-700 font-semibold" />

            <x-text-input id="password" class="block mt-1 w-full border border-teal-300 rounded-lg px-4 py-2 focus:ring-teal-500 focus:border-teal-500"
                            type="password" 
                            name="password" 
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-teal-700 font-semibold" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full border border-teal-300 rounded-lg px-4 py-2 focus:ring-teal-500 focus:border-teal-500"
                            type="password" 
                            name="password_confirmation" 
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <x-primary-button class="bg-teal-600 text-white hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-opacity-50">
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
