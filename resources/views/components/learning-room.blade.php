<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- component -->
        <div>
            <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">
                <!-- Loading screen -->
                <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
                    Loading.....
                </div>

                <!-- Sidebar backdrop -->
                <div x-show.in.out.opacity="isSidebarOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"></div>

                <!-- Sidebar -->
                <aside x-transition:enter="transition transform duration-300" x-transition:enter-start="-translate-x-full opacity-30  ease-in" x-transition:enter-end="translate-x-0 opacity-100 ease-out" x-transition:leave="transition transform duration-300" x-transition:leave-start="translate-x-0 opacity-100 ease-out" x-transition:leave-end="-translate-x-full opacity-0 ease-in" class="fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-64 max-h-screen overflow-hidden transition-all transform bg-white border-r
                shadow-lg lg:z-auto lg:static lg:shadow-none" :class="{'-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen}">
                    <!-- sidebar header -->
                    <div class="flex items-center justify-between flex-shrink-0 p-2" :class="{'lg:justify-center': !isSidebarOpen}">
                        <span class="p-2 text-xl font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">
                            <span :class="{'lg:hidden': !isSidebarOpen}">ezclass</span>
                        </span>
                        <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden">
                            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <!-- Sidebar links -->
                    <nav class="flex-1 overflow-hidden hover:overflow-y-auto">
                        <ul class="p-2 overflow-hidden">
                            <li>
                                <a href="#" class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100" :class="{'justify-center': !isSidebarOpen}">
                                    <span>
                                        <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                    </span>
                                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Overview</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100" :class="{'justify-center': !isSidebarOpen}">
                                    <span>
                                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                        </svg>
                                    </span>
                                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Payment</span>
                                </a>
                            </li>
                            <!-- Sidebar Links... -->
                        </ul>
                    </nav>
                </aside>

                <div class="flex flex-col flex-1 h-full overflow-hidden">
                    <!-- Navbar -->
                    <header class="flex-shrink-0 border-b">
                        <div class="flex items-center justify-between p-2">
                            <!-- Navbar left -->
                            <div class="flex items-center space-x-3">
                                <span class="p-2 text-xl font-semibold tracking-wider uppercase lg:hidden">ezclass</span>
                                <!-- Toggle sidebar button -->
                                <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none focus:ring">
                                    <svg class="w-4 h-4 text-gray-600" :class="{'transform transition-transform -rotate-180': isSidebarOpen}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>

                            <a href="{{route('welcome')}}"> Home</a>
                            <!-- Navbar right -->
                            <div class="relative flex items-center space-x-3">
                                <!-- avatar button -->
                                <div class="relative" x-data="{ isOpen: false }">
                                    <button @click="isOpen = !isOpen" class="p-1 bg-gray-200 rounded-full focus:outline-none focus:ring">
                                        <img class="object-cover w-8 h-8 rounded-full" src="{{ asset('storage/avatar/'. Auth::user()->avatar )}}" alt="Ahmed Kamel" />
                                    </button>
                                    <!-- green dot -->
                                    <div class="absolute right-0 p-1 bg-green-400 rounded-full bottom-3 animate-ping"></div>
                                    <div class="absolute right-0 p-1 bg-green-400 border border-white rounded-full bottom-3"></div>

                                    <!-- Dropdown card -->
                                    <div @click.away="isOpen = false" x-show.transition.opacity="isOpen" class="absolute mt-3 transform -translate-x-full bg-white rounded-md shadow-lg min-w-max">
                                        <div class="flex flex-col p-4 space-y-1 font-medium border-b">
                                            <span class="text-gray-800">{{Auth::User()->name}}</span>
                                            <span class="text-sm text-gray-400">{{Auth::User()->email}}</span>
                                        </div>
                                        <div>
                                            @role('teacher')
                                            <x-dropdown-link href="{{ route('teacher.dashboard') }}">
                                                {{__('Dashboard')}}
                                            </x-dropdown-link>
                                            @endrole
                                            @role('student')
                                            <x-dropdown-link href="{{ route('student.dashboard') }}">
                                                {{__('Dashboard')}}
                                            </x-dropdown-link>
                                            @endrole
                                            @role('admin')
                                            <x-dropdown-link href="{{ route('admin.dashboard') }}">
                                                {{__('Dashboard')}}
                                            </x-dropdown-link>
                                            @endrole
                                        </div>

                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                                {{ __('Logout') }}
                                            </x-dropdown-link>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main content -->
                    <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
                        <!-- Main content header -->
                        <div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
                            <h1 class="text-2xl font-semibold whitespace-nowrap">Dashboard</h1>
                            <div class="space-x-2">

                            </div>
                        </div>

                        <main>
                            {{ $slot }}
                        </main>

                    </main>
                    <!-- Main footer -->
                    <footer class="flex items-center justify-between flex-shrink-0 p-4 border-t max-h-14">
                        <div>ezclass &copy; 2021</div>
                        <div class="text-sm">
                            Made by
                            <a class="text-blue-400 underline" href="https://www.zencemart.com" target="_blank" rel="noopener noreferrer">zencemart software company</a>
                        </div>
                        <div>
                            <!-- Github svg -->


                        </div>
                    </footer>
                </div>

                <!-- Setting panel button -->
                <div>
                    <button @click="isSettingsPanelOpen = true" class="fixed right-0 px-4 py-2 text-sm font-medium text-white uppercase transform rotate-90 translate-x-8 bg-gray-600 top-1/2 rounded-b-md">
                        All Students
                    </button>
                </div>

                <!-- Settings panel -->
                <div x-show="isSettingsPanelOpen" @click.away="isSettingsPanelOpen = false" x-transition:enter="transition transform duration-300" x-transition:enter-start="translate-x-full opacity-30  ease-in" x-transition:enter-end="translate-x-0 opacity-100 ease-out" x-transition:leave="transition transform duration-300" x-transition:leave-start="translate-x-0 opacity-100 ease-out" x-transition:leave-end="translate-x-full opacity-0 ease-in" class="fixed inset-y-0 right-0 flex flex-col bg-white shadow-lg bg-opacity-20 w-80" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
                    <div class="flex items-center justify-between flex-shrink-0 p-2">
                        <h6 class="p-2 text-lg">Settings</h6>
                        <button @click="isSettingsPanelOpen = false" class="p-2 rounded-md focus:outline-none focus:ring">
                            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 max-h-full p-4 overflow-hidden hover:overflow-y-scroll">
                        <span>Settings Content</span>
                        <!-- Settings Panel Content ... -->
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
            <script>
                const setup = () => {
                    return {
                        loading: true,
                        isSidebarOpen: false,
                        toggleSidbarMenu() {
                            this.isSidebarOpen = !this.isSidebarOpen
                        },
                        isSettingsPanelOpen: false,
                        isSearchBoxOpen: false,
                    }
                }
            </script>
        </div>
    </div>

</body>

</html>