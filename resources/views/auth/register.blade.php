<x-app-layout>

    <x-auth-page>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2" for="name">Full
                        Name</label>
                </div>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2"
                        for="LoggingEmailAddress">Email Address</label>
                </div>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2"
                        for="LoggingPhoneNumber">Phone Number (07XXXXXXXX)</label>
                </div>
                <x-input id="phone_number" class="block mt-1 w-full" type="number" name="phone_number"
                    :value="old('phone_number')" required autofocus />
            </div>

            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2"
                        for="gender">Gender</label>
                </div>
                <select name="gender" id="gender" :value="old('gender')"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
                    <option value="" selected disabled></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2"
                        for="loggingPassword">Password</label>
                </div>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2"
                        for="loggingPassword">Confirm Password</label>
                </div>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password_confirmation"
                    required />
            </div>

            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2" for="role">Select
                        Role</label>
                </div>
                <select name="role" id="role" :value="old('role')"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
                    <option value="" selected disabled></option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                </select>
            </div>

            <div class="block mt-4">
                <label for="terms_&_conditions" class="inline-flex items-center">
                    <input id="terms_&_conditions" type="checkbox" name="terms_&_conditions" value="1"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        required>
                    <span class="ml-2 text-sm text-gray-600">I agree to <a href="{{ route('legal') }}" target="new"
                            class="text-blue-500"><u>Terms & Conditions</u></a></span>
                </label>
            </div>

            <div class="mt-8">
                <button type="submit"
                    class="bg-gray-700 text-white py-2 px-4 w-full tracking-wide rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                    Register
                </button>
            </div>

            <div class="mt-4 flex items-center justify-between">
                <span class="border-b dark:border-gray-600 w-1/5 md:w-1/4"></span>

                <a href="{{ route('login') }}"
                    class="text-xs text-gray-500 dark:text-gray-400 uppercase hover:underline">
                    {{ __('Already registered?') }}</a>

                <span class="border-b dark:border-gray-600 w-1/5 md:w-1/4"></span>
            </div>
        </form>
    </x-auth-page>

    <!-- overlay -->
    <div id="modal_overlay"
        class="absolute inset-0 bg-black bg-opacity-30 h-screen w-full flex justify-center items-start md:items-center pt-10 md:pt-0">

        <!-- modal -->
        <div id="modal"
            class="pacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-1/2 h-2/2 md:h-4/4 bg-white rounded shadow-lg duration-300">

            <!-- button close -->
            <button onclick="openModal(false)"
                class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
                &cross;
            </button>

            <!-- header -->
            <div class="px-4 py-3 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-600">Home Class Registration</h2>
            </div>

            <!-- body -->
            <div class="w-full p-3">
                <x-embed-styles />
                <x-embed url="https://youtu.be/0bDqpFGFcJ0" />
            </div>
        </div>
    </div>

    <script>
        const modal_overlay = document.querySelector('#modal_overlay');
        const modal = document.querySelector('#modal');

        function openModal(value) {
            const modalCl = modal.classList
            const overlayCl = modal_overlay

            if (value) {
                overlayCl.classList.remove('hidden')
                setTimeout(() => {
                    modalCl.remove('opacity-0')
                    modalCl.remove('-translate-y-full')
                    modalCl.remove('scale-150')
                }, 100);
            } else {
                modalCl.add('-translate-y-full')
                setTimeout(() => {
                    modalCl.add('opacity-0')
                    modalCl.add('scale-150')
                }, 100);
                setTimeout(() => overlayCl.classList.add('hidden'), 300);
            }
        }
        openModal(true)

    </script>
</x-app-layout>
