<x-app-layout>

    <x-auth-page>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mt-4">
                <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2" for="LoggingEmailAddress">Email Address</label>
                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus class="block mt-1 w-full" />
            </div>

            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2" for="loggingPassword">Password</label>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-xs text-gray-500 dark:text-gray-300 hover:underline"> {{ __('Forgot your password?') }}</a>
                    @endif
                </div>

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="mt-8">
                <button type="submit" class="bg-gray-700 text-white py-2 px-4 w-full tracking-wide rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                    Login
                </button>
            </div>

            <div class="mt-4 flex items-center justify-between">
                <span class="border-b dark:border-gray-600 w-1/5 md:w-1/4"></span>

                <a href="{{route('register')}}" class="text-xs text-gray-500 dark:text-gray-400 uppercase hover:underline">or register</a>

                <span class="border-b dark:border-gray-600 w-1/5 md:w-1/4"></span>
            </div>
        </form>

    </x-auth-page>

</x-app-layout>
