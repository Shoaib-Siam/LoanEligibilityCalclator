<x-guest-layout>
    <div class="mb-4 text-sm text-teal-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}" class="bg-white p-6 rounded-lg shadow-md border border-teal-200">
        @csrf

        <!-- Password -->
        <div class="mb-6">
            <x-input-label for="password" :value="__('Password')" class="text-teal-700 font-semibold" />

            <x-text-input id="password" class="block mt-1 w-full border border-teal-300 rounded-lg px-4 py-2 focus:ring-teal-500 focus:border-teal-500"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button class="bg-teal-600 text-white hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-opacity-50">
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
