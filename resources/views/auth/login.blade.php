<x-app-layout>

    <div class="mt-24 flex max-w-sm mx-auto bg-blue-50 dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden lg:max-w-4xl">
        <div class="hidden lg:block lg:w-1/2 bg-cover" style="background-image:url('https://images.unsplash.com/photo-1602610411365-76e8c2a88e18?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=333&q=80')"></div>

        <div class="w-full py-8 px-6 md:px-8 lg:w-1/2">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-white text-center">ONLINE CLASS</h2>

            <p class="text-xl text-gray-600 dark:text-gray-200 text-center">Welcome back!</p>

            <div class="mt-4 flex items-center justify-between">
                <span class="border-b dark:border-gray-600 w-1/5 lg:w-1/4"></span>

                <span href="#" class="text-xs text-center text-gray-500 dark:text-gray-400 uppercase">login with email</span>

                <span class="border-b dark:border-gray-400 w-1/5 lg:w-1/4"></span>
            </div>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mt-4">
                    <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2" for="LoggingEmailAddress">Email Address</label>
                    <input id="email" class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" type="email" name="email" :value="old('email')" required autofocus>
                </div>

                <div class="mt-4">
                    <div class="flex justify-between">
                        <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2" for="loggingPassword">Password</label>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-xs text-gray-500 dark:text-gray-300 hover:underline"> {{ __('Forgot your password?') }}</a>
                        @endif
                    </div>

                    <input id="password" class="bg-wbg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" type="password" name="password" required autocomplete="current-password">
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
        </div>
    </div>

</x-app-layout>
