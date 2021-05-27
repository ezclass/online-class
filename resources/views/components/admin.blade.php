<x-guest-layout>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .bg-sidebar {
            background: #3d68ff;
        }

        .cta-btn {
            color: #3d68ff;
        }

        .upgrade-btn {
            background: #1947ee;
        }

        .upgrade-btn:hover {
            background: #0038fd;
        }

        .active-nav-link {
            background: #1947ee;
        }

        .nav-item:hover {
            background: #1947ee;
        }

        .account-link:hover {
            background: #3d68ff;
        }
    </style>

    <div class="bg-gray-100 font-family-karla flex">
        <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
            <div class="p-6">
                <a href="{{ route('dashboard') }}" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">{{ Auth::user()->name }}</a>
            </div>
            <nav class="text-white text-base font-semibold pt-3">
                @role('super_admin')
                <x-responsive-nav-link :href="route('super.admin.dashboard')" :active="request()->routeIs('super.admin.dashboard')">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
                @endrole

                <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                    <i class="fas fa-user-alt mr-3"></i>
                    {{ __('Overview') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('all.teacher')" :active="request()->routeIs('all.teacher')">
                    <i class="fab fa-amazon-pay"></i>
                    {{ __('Teacher Pay') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('client.opinion')" :active="request()->routeIs('client.opinion')">
                    <i class="far fa-comment"></i>
                    {{ __('Client Opinion') }}
                </x-responsive-nav-link>

            </nav>
            @if (Route::has('login'))
            @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Logout
                </button>
            </form>
            @endauth
            @endif
        </aside>

        <div class="w-full flex flex-col h-screen overflow-y-hidden">
            <!-- Desktop Header -->
            <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
                <div class="w-1/2"></div>
                <a href="{{route('welcome')}}" class="text-indigo-500">Home</a>
                <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                    <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                        <img src="{{ Storage::disk('do')->url('avatar/'. Auth::user()->avatar)}}">
                    </button>
                    <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                    <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                        <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                        <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                        <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                    </div>
                </div>
            </header>

            <!-- Mobile Header & Nav -->
            <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
                <div class="flex items-center justify-between">
                    <a href="{{ route('dashboard') }}" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                        <img src="{{ Storage::disk('do')->url('avatar/'. Auth::user()->avatar)}}">
                    </a>
                    <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                        <i x-show="!isOpen" class="fas fa-bars"></i>
                        <i x-show="isOpen" class="fas fa-times"></i>
                    </button>
                </div>

                <!-- Dropdown Nav -->
                <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                    @role('super_admin')
                    <x-responsive-nav-link :href="route('super.admin.dashboard')" :active="request()->routeIs('super.admin.dashboard')">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                    @endrole

                    <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                        <i class="fas fa-user-alt mr-3"></i>
                        {{ __('Overview') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link :href="route('all.teacher')" :active="request()->routeIs('all.teacher')">
                        <i class="fab fa-amazon-pay"></i>
                        {{ __('Teacher Pay') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link :href="route('client.opinion')" :active="request()->routeIs('client.opinion')">
                        <i class="far fa-comment"></i>
                        {{ __('Client Opinion') }}
                    </x-responsive-nav-link>

                </nav>
            </header>

            <div class="w-full overflow-x-hidden border-t flex flex-col">
                <main class="w-full flex-grow p-6">
                    {{ $slot }}
                </main>
            </div>

        </div>

        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    </div>

</x-guest-layout>
