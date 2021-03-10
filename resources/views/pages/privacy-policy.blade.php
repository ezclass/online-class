<x-app-layout>
    <div class="min-w-screen min-h-screen bg-blue-100 flex items-center p-5 lg:p-20 overflow-hidden relative">
        <div class="flex-1 min-h-full min-w-full rounded-3xl bg-white shadow-xl p-10 lg:p-20 text-gray-800 relative md:flex items-center text-center md:text-left">
            <div class="w-full md:w-1/2">
             
                <div class="mb-10 md:mb-20 text-gray-600 font-light">
                    <h1 class="font-black uppercase text-3xl lg:text-5xl text-yellow-500 mb-10">Login</h1>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mt-4">
                            <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2" for="LoggingEmailAddress">Email Address</label>
                            <input id="email" type="email" name="email" :value="old('email')" required autofocus class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
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


        </div>
        <div class="w-64 md:w-96 h-96 md:h-full bg-blue-200 bg-opacity-30 absolute -top-64 md:-top-96 right-20 md:right-32 rounded-full pointer-events-none -rotate-45 transform"></div>
        <div class="w-96 h-full bg-yellow-200 bg-opacity-20 absolute -bottom-96 right-64 rounded-full pointer-events-none -rotate-45 transform"></div>
    </div>
</x-app-layout>

