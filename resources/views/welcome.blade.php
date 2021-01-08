<x-app-layout>
    <!-- Main Area -->
    <main>
        <!-- About Section -->
        <section id="about" class="relative py-20 bg-black text-white">
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4" data-aos="fade-right">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{ asset('storage/home/home.jpg')}}" />
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4" data-aos="fade-left">
                        <div class="md:pr-12">
                            <small class="text-orange-500">Online Class</small>
                            <h3 class="text-4xl uppercase font-bold">Online Learning Platform</h3>
                            <p class="mt-4 text-lg leading-relaxed">

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="flex max-w-sm w-full mx-auto bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="flex justify-center items-center w-12 bg-green-500">
            <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
            </svg>
        </div>

        <div class="-mx-3 py-2 px-4">
            <div class="mx-3">
                <span class="text-green-500 dark:text-green-400 font-semibold">Success</span>
                <p class="text-gray-600 dark:text-gray-200 text-sm">Your account was registered!</p>
            </div>
        </div>
    </div>

        
        <!-- Trainers Section -->
        <section class="pt-20 pb-48">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center mb-24">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold uppercase">
                            Meet Our Teachers
                        </h2>
                        <p class="text-lg leading-relaxed m-4">

                        </p>
                    </div>
                </div>
                <!-- Trainer Card Wrapper -->
                <div class="flex flex-wrap">
                    <!-- Card 1 -->
                    <div class="w-full md:w-4/12 lg:mb-0 mb-12 px-4" data-aos="flip-right">
                        <div class="px-6">
                            <img alt="..." src="https://images.unsplash.com/photo-1597347343908-2937e7dcc560?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" class="shadow-lg rounded max-w-full mx-auto" style="max-width: 250px" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Mr Rogers</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Neighborhood Watchman
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="w-full md:w-4/12 lg:mb-0 mb-12 px-4" data-aos="flip-right">
                        <div class="px-6">
                            <img alt="..." src="https://images.unsplash.com/photo-1594381898411-846e7d193883?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="shadow-lg rounded max-w-full mx-auto" style="max-width: 250px" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Strawberry Shortcake</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Cupcake Smasher
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="w-full md:w-4/12 lg:mb-0 mb-12 px-4" data-aos="flip-right">
                        <div class="px-6">
                            <img alt="..." src="https://images.unsplash.com/photo-1567013127542-490d757e51fc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" class="shadow-lg rounded max-w-full mx-auto" style="max-width: 250px" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Ronald McDonald</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Double Whoopass With Cheese
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-white dark:bg-gray-800 container mx-auto p-6">
            <h2 class="text-gray-800 dark:text-white font-medium capitalize text-xl md:text-2xl">Our Team</h2>

            <div class="flex items-center justify-center">
                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-8">
                    <div class="max-w-xs w-full text-center">
                        <img class="h-48 w-full object-cover object-center mx-auto rounded-lg" src="https://images.unsplash.com/photo-1493863641943-9b68992a8d07?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=739&q=80" alt="avatar" />

                        <div class="mt-2">
                            <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Ahmed Omer</h3>
                            <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">CEO</span>
                        </div>
                    </div>

                    <div class="max-w-xs w-full text-center">
                        <img class="h-48 w-full object-cover object-center mx-auto rounded-lg" src="https://images.unsplash.com/photo-1516756587022-7891ad56a8cd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar" />

                        <div class="mt-2">
                            <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Jane Doe</h3>
                            <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Co-founder</span>
                        </div>
                    </div>

                    <div class="max-w-xs w-full text-center">
                        <img class="h-48 w-full object-cover object-center mx-auto rounded-lg" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80" alt="avatar" />

                        <div class="mt-2">
                            <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Steve Ben</h3>
                            <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">UI/UX</span>
                        </div>
                    </div>

                    <div class="max-w-xs w-full text-center">
                        <img class="h-48 w-full object-cover object-center mx-auto rounded-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar" />

                        <div class="mt-2">
                            <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Patterson Johnson</h3>
                            <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Software Engineer</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Header Section -->
        <section class="mt-15 pb-20 relative block bg-black text-white">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4 lg:pt-5 lg:pb-5 pb-10 pt-10">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white uppercase">
                            ONLINE CLASS
                        </h2>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
