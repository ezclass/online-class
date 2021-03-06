<nav x-data="{ open: false }" class="bg-blue-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}">
                        <img src="{{Storage::disk('do')->url('logo/logo.png')}}" alt="logo" class="mt-2 block h-14 w-auto fill-current text-gray-600">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                        {{ __('Home') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('search.class')" :active="request()->routeIs('search.class')">
                        {{ __('All Classes') }}
                    </x-nav-link>
                </div>


                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('contactus')" :active="request()->routeIs('contactus')">
                        {{ __('Contact Us') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="sm:flex sm:items-center sm:ml-6">
                <div class="mt-1 md:mt-0 sm:flex sm:items-center sm:mr-6">
                    <x-notification />
                </div>

                @if (Route::has('login'))

                @role('teacher|student')
                @if (Auth::user()->verify_account == 1)
                <span class="md:flex sm:hidden items-center text-sm font-medium text-green-500">
                    <i class="fas fa-check animate-pulse mr-1"></i> <span class="animate-pulse">Verified</span> <!-- certificate -->
                </span>
                @endif
                @endrole

                <div class="hidden  top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <div>
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700
                                hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition
                                duration-150 ease-in-out">
                                    <div>
                                        <img src="{{ Storage::disk('do')->url('avatar/'. Auth::user()->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
                                        <span class="ml-2">{{Auth::user()->name}}</span>
                                    </div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <!-- Authentication -->
                                <div>
                                    <x-dropdown-link href="{{ route('dashboard') }}">
                                        {{__('Dashboard')}}
                                    </x-dropdown-link>
                                </div>
                                <div>
                                    <x-dropdown-link href="{{ route('setting') }}">
                                        {{__('Setting')}}
                                    </x-dropdown-link>
                                </div>
                                @role('teacher')
                                <div>
                                    <x-dropdown-link :href="route('public.dashboard',Auth::user())">
                                        {{ __('My Public Dashboard') }}
                                    </x-dropdown-link>
                                </div>
                                @endrole
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Logout') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link2 :href="route('welcome')" :active="request()->routeIs('welcome')">
                {{ __('Home') }}
            </x-responsive-nav-link2>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link2 :href="route('search.class')" :active="request()->routeIs('search.class')">
                {{ __('All Classes') }}
            </x-responsive-nav-link2>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link2 :href="route('contactus')" :active="request()->routeIs('contactus')">
                {{ __('Contact Us') }}
            </x-responsive-nav-link2>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Route::has('login'))
                @auth
                <div class="ml-3">
                    <img src="{{ Storage::disk('do')->url('avatar/'. Auth::user()->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
                    <span class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</span>
                </div>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
                @endauth
                @endif

            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->

                @if (Route::has('login'))
                @auth
                <div>
                    <x-dropdown-link href="{{ route('dashboard') }}">
                        {{__('Dashboard')}}
                    </x-dropdown-link>
                </div>

                <div>
                    <x-dropdown-link href="{{ route('setting') }}">
                        {{__('setting')}}
                    </x-dropdown-link>
                </div>
                @role('teacher')
                <div>
                    <x-dropdown-link :href="route('public.dashboard',Auth::user())" :active="request()->routeIs('public.dashboard')">
                        {{ __('My Public Dashboard') }}
                    </x-dropdown-link>
                </div>
                @endrole
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link2 :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-responsive-nav-link2>
                </form>
                @endauth
                @else

                @endif
            </div>
        </div>
    </div>
</nav>
