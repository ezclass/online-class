<x-app-layout>

    <x-auth-page>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mt-4">
                <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2" for="LoggingEmailAddress">Email Address</label>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-8">
                <button type="submit" class="bg-gray-700 text-white py-2 px-4 w-full tracking-wide rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>

    </x-auth-page>

</x-app-layout>
