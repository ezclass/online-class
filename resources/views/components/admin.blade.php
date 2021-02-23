<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ezclass') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">

    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">


    <style>
        /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #667eea !important;
            /*bg-indigo-500*/
        }
    </style>

</head>

<body class="font-sans antialiased">
    @include('sweetalert::alert')
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
                                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Dashboard</span>
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
                    <!-- Sidebar footer -->
                    <div class="flex-shrink-0 p-2 border-t max-h-14">
                        <button class="flex items-center justify-center w-full px-4 py-2 space-x-1 font-medium tracking-wider uppercase bg-gray-100 border rounded-md focus:outline-none focus:ring">
                            <span>
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                            </span>

                            @if (Route::has('login'))
                            @auth

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                   <span :class="{'lg:hidden': !isSidebarOpen}">  {{ __('Logout') }} </span>
                                </x-responsive-nav-link>
                            </form>
                            @endauth
                            @else

                            @endif
                        </button>
                    </div>
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

                            <!-- Mobile search box -->
                            <div x-show.transition="isSearchBoxOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
                                <div @click.away="isSearchBoxOpen = false" class="absolute inset-x-0 flex items-center justify-between p-2 bg-white shadow-md">
                                    <div class="flex items-center flex-1 px-2 space-x-2">
                                        <!-- search icon -->
                                        <span>
                                            <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </span>
                                        <input type="text" placeholder="Search" class="w-full px-4 py-3 text-gray-600 rounded-md focus:bg-gray-100 focus:outline-none" />
                                    </div>
                                    <!-- close button -->
                                    <button @click="isSearchBoxOpen = false" class="flex-shrink-0 p-4 rounded-md">
                                        <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Desktop search box -->
                            <div class="items-center hidden px-2 space-x-2 md:flex-1 md:flex md:mr-auto md:ml-5">
                                <!-- search icon -->
                                <span>
                                    <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </span>
                                <input type="text" placeholder="Search" class="px-4 py-3 rounded-md hover:bg-gray-100 lg:max-w-sm md:py-2 md:flex-1 focus:outline-none md:focus:bg-gray-100 md:focus:shadow md:focus:border" />
                            </div>
                            <a href="{{route('welcome')}}"> Home</a>
                            <!-- Navbar right -->
                            <div class="relative flex items-center space-x-3">
                                <!-- Search button -->
                                <button @click="isSearchBoxOpen = true" class="p-2 bg-gray-100 rounded-full md:hidden focus:outline-none focus:ring hover:bg-gray-200">
                                    <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </button>

                                <div class="items-center hidden space-x-3 md:flex">
                                    <!-- Notification Button -->
                                    <div class="relative" x-data="{ isOpen: false }">
                                        <!-- red dot -->
                                        <div class="absolute right-0 p-1 bg-red-400 rounded-full animate-ping"></div>
                                        <div class="absolute right-0 p-1 bg-red-400 border rounded-full"></div>
                                        <button @click="isOpen = !isOpen" class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring">
                                            <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                            </svg>
                                        </button>

                                        <!-- Dropdown card -->
                                        <div @click.away="isOpen = false" x-show.transition.opacity="isOpen" class="absolute w-48 max-w-md mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max">
                                            <div class="p-4 font-medium border-b">
                                                <span class="text-gray-800">Notification</span>
                                            </div>
                                            <ul class="flex flex-col p-2 my-2 space-y-1">
                                                <li>
                                                    <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another Link</a>
                                                </li>
                                            </ul>
                                            <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                                <a href="#">See All</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Services Button -->
                                    <div x-data="{ isOpen: false }">
                                        <button @click="isOpen = !isOpen" class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring">
                                            <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                            </svg>
                                        </button>

                                        <!-- Dropdown -->
                                        <div @click.away="isOpen = false" @keydown.escape="isOpen = false" x-show.transition.opacity="isOpen" class="absolute mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max">
                                            <div class="p-4 text-lg font-medium border-b">Web apps & services</div>
                                            <ul class="flex flex-col p-2 my-3 space-y-3">
                                                <li>
                                                    <a href="#" class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                                        <span class="block mt-1">
                                                            <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                                                <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                                            </svg>
                                                        </span>
                                                        <span class="flex flex-col">
                                                            <span class="text-lg">Atlassian</span>
                                                            <span class="text-sm text-gray-400">Lorem ipsum dolor sit.</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                                        <span class="block mt-1">
                                                            <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                                            </svg>
                                                        </span>
                                                        <span class="flex flex-col">
                                                            <span class="text-lg">Slack</span>
                                                            <span class="text-sm text-gray-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                                <a href="#">Show all apps</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Options Button -->
                                    <div class="relative" x-data="{ isOpen: false }">
                                        <button @click="isOpen = !isOpen" class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring">
                                            <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                            </svg>
                                        </button>

                                        <!-- Dropdown card -->
                                        <div @click.away="isOpen = false" x-show.transition.opacity="isOpen" class="absolute w-40 max-w-sm mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max">
                                            <div class="p-4 font-medium border-b">
                                                <span class="text-gray-800">Options</span>
                                            </div>
                                            <ul class="flex flex-col p-2 my-2 space-y-1">
                                                <li>
                                                    <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another Link</a>
                                                </li>
                                            </ul>
                                            <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                                <a href="#">See All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                        <ul class="flex flex-col p-2 my-2 space-y-1">
                                            <li>
                                                <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another Link</a>
                                            </li>
                                        </ul>
                                        <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                            <a href="#">Logout</a>
                                        </div>
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
                            <a class="text-blue-400 underline" href="https://www.facebook.com/shashika.nuywan/" target="_blank" rel="noopener noreferrer">Shashika Nuwan</a>
                        </div>
                        <div>
                            <!-- Github svg -->

                        </div>
                    </footer>
                </div>

                <!-- Setting panel button -->
                <div>
                    <button @click="isSettingsPanelOpen = true" class="fixed right-0 px-4 py-2 text-sm font-medium text-white uppercase transform rotate-90 translate-x-8 bg-gray-600 top-1/2 rounded-b-md">
                        Settings
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


    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

</body>

</html>