<x-app-layout>

<x-auth-page>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />


    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="hidden" value="avatar.jpg" name="avatar">
        <div class="mt-4">
            <div class="flex justify-between">
                <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2" for="name">Name</label>
            </div>
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>

        <div class="mt-4">
            <div class="flex justify-between">
                <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2" for="LoggingEmailAddress">Email Address</label>
            </div>
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="mt-4">
            <div class="flex justify-between">
                <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2" for="loggingPassword">Password</label>
            </div>
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="mt-4">
            <div class="flex justify-between">
                <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2" for="loggingPassword">Confirm Password</label>
            </div>
            <x-input id="password" class="block mt-1 w-full" type="password" name="password_confirmation" required />
        </div>

        <div class="mt-4">
            <div class="flex justify-between">
                <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2" for="role">Role</label>
            </div>
            <select name="role" id="role" :value="old('role')" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                <option value="" selected disabled></option>
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
            </select>
        </div>

        <div class="block mt-4">
            <label for="Privacy_Policy" class="inline-flex items-center">
                <input id="Privacy_Policy" type="checkbox" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="privacy-policy">
                <span class="ml-2 text-sm text-gray-600">I agree to the terms and conditions of the <a href="{{route('privacy-policy')}}" class="text-blue-500"><u>Privacy Policy</u></a> </span>
            </label>
        </div>

        <div class="mt-8">
            <button type="submit" class="bg-gray-700 text-white py-2 px-4 w-full tracking-wide rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                Register
            </button>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <span class="border-b dark:border-gray-600 w-1/5 md:w-1/4"></span>

            <a href="{{route('login')}}" class="text-xs text-gray-500 dark:text-gray-400 uppercase hover:underline"> {{ __('Already registered?') }}</a>

            <span class="border-b dark:border-gray-600 w-1/5 md:w-1/4"></span>
        </div>
    </form>

    </x-auth-page>
</x-app-layout>
