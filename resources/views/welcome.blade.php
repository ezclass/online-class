<x-app-layout>

    <x-header />

    <x-service />

    <div class="mt-5 mx-auto bg-gray-200">
        <!-- Carousel Body -->
        <div class="relative  block md:flex items-center bg-gray-100" style="min-height: 19rem;">
            <div class="relative w-full md:w-2/5 h-full overflow-hidden" style="min-height: 19rem;">
                <img class="absolute inset-0 w-full h-full object-cover object-center" src="{{ asset('storage/home/e-learn1.jpg')}}" alt="">
                <div class="absolute inset-0 w-full h-full bg-indigo-900 opacity-75"></div>
            </div>
            <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100">
                <div class="p-12 md:pr-24 md:pl-16 md:py-12">
                    <p class="text-gray-600"><span class="text-gray-900">DIGITAL LEARN</span> is a UK-based fashion retailer that has nearly doubled in size since last year. They integrated Stripe to deliver seamless checkout across mobile and web for customers in 100+ countries, all while automatically combating fraud.</p>
                </div>
                <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
            </div>
        </div>

        <!-- Carousel Body -->
        <div class="relative  block md:flex items-center bg-gray-100" style="min-height: 19rem;">
            <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 ">
                <div class="p-12 md:pr-24 md:pl-16 md:py-12">
                    <p class="text-gray-600"><span class="text-gray-900">DIGITAL LEARN</span> is a UK-based fashion retailer that has nearly doubled in size since last year. They integrated Stripe to deliver seamless checkout across mobile and web for customers in 100+ countries, all while automatically combating fraud.</p>
                </div>
            </div>

            <div class="relative w-full md:w-2/5 h-full overflow-hidden" style="min-height: 19rem;">
                <img class="absolute inset-0 w-full h-full object-cover object-center" src="{{ asset('storage/home/home.jpg')}}" alt="">
                <div class="absolute inset-0 w-full h-full bg-indigo-900 opacity-75"></div>

                <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
            </div>

        </div>
    </div>

</x-app-layout>
