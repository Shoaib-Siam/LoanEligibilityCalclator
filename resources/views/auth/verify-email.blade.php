<x-guest-layout>
    <div class="bg-white p-6 rounded-lg shadow-lg border border-teal-200">
        <!-- Email Verification Message -->
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        <!-- Success Message for Resending Verification Link -->
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-teal-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <!-- Actions -->
        <div class="mt-6 flex items-center justify-between gap-4">
            <!-- Resend Verification Button -->
            <form method="POST" action="{{ route('verification.send') }}" class="w-1/2">
                @csrf

                <x-primary-button class="w-full bg-teal-600 text-white hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-opacity-50">
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </form>

            <!-- Log Out Button -->
            <form method="POST" action="{{ route('logout') }}" class="w-1/2">
                @csrf

                <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
