<x-app-layout>
      <!-- Main Area -->
  <main>
    <!-- About Section -->
    <section id="about" class="relative py-20 bg-black text-white">
      <div class="container mx-auto px-4">
        <div class="items-center flex flex-wrap">
          <div class="w-full md:w-4/12 ml-auto mr-auto px-4" data-aos="fade-right">
            <img alt="..." class="max-w-full rounded-lg shadow-lg"
              src="{{ asset('storage/home/home.jpg')}}" />
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
              <img alt="..."
                src="https://images.unsplash.com/photo-1597347343908-2937e7dcc560?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
                class="shadow-lg rounded max-w-full mx-auto" style="max-width: 250px" />
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
              <img alt="..."
                src="https://images.unsplash.com/photo-1594381898411-846e7d193883?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                class="shadow-lg rounded max-w-full mx-auto" style="max-width: 250px" />
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
              <img alt="..."
                src="https://images.unsplash.com/photo-1567013127542-490d757e51fc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
                class="shadow-lg rounded max-w-full mx-auto" style="max-width: 250px" />
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

    <!-- Contact Header Section -->
    <section class="pb-20 relative block bg-black text-white">
      <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px; transform: translateZ(0px)">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
          version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4 lg:pt-10 lg:pb-5 pb-10 pt-10">
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
