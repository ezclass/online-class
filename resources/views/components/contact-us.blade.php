<section class="lg:mt-16 mb-16 w-full max-w-2xl px-6 py-4 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">Get in touch</h2>
    <p class="mt-3 text-center text-gray-600 dark:text-gray-400">
        We are committed to assisting your issue
    </p>

    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 md:grid-cols-3">
        <a class="flex flex-col items-center px-4 py-3 text-gray-700 rounded-md dark:text-gray-200 hover:bg-blue-200 dark:hover:bg-blue-500">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>

            <span class="mt-2">Sri Lanka</span>
        </a>

        <a class="flex flex-col items-center px-4 py-3 text-gray-700 rounded-md dark:text-gray-200 hover:bg-blue-200 dark:hover:bg-blue-500">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
            </svg>

            <span class="mt-2">
                +94 775486681 <br>
                +94 750000000
            </span>
        </a>

        <a class="flex flex-col items-center px-4 py-3 text-gray-700 rounded-md dark:text-gray-200 hover:bg-blue-200 dark:hover:bg-blue-500">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
            </svg>

            <span class="mt-2">contact@homeclass.lk</span>
        </a>
    </div>
    <form action="{{route('send.mail')}}" method="POST">
        @csrf
        <div class="mt-6 ">
            <div class="items-center -mx-2 md:flex">
                <div class="w-full mx-2">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Name</label>

                    <input name="name" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" type="text" required>
                </div>

                <div class="w-full mx-2 mt-4 md:mt-0">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">E-mail</label>

                    <input name="email" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" type="email" required>
                </div>
            </div>

            <div class="w-full mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Message</label>

                <textarea name="message" class="block w-full h-40 px-4 py-2 border border-gray-400  rounded focus:outline-non focus:border-teal-500" required></textarea>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="px-4 py-2 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Send Message</button>
            </div>
        </div>
    </form>
</section>
