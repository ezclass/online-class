<x-guest-layout>
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

    <div class="font-sans antialiased">
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
                            <ul class="p-1 overflow-hidden">

                                <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                                    {{ __('Overview') }}
                                </x-responsive-nav-link>

                                <x-responsive-nav-link :href="route('admin.payment')" :active="request()->routeIs('admin.payment')">
                                    {{ __('Payment') }}
                                </x-responsive-nav-link>

                                <x-responsive-nav-link>
                                    {{ __('Seting') }}
                                </x-responsive-nav-link>

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
                                        <span :class="{'lg:hidden': !isSidebarOpen}"> {{ __('Logout') }} </span>
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

                                <a href="{{route('welcome')}}"> Home</a>
                                <!-- Navbar right -->
                                <div class="relative flex items-center space-x-3">
                                    <!-- Search button -->
                                    <button @click="isSearchBoxOpen = true" class="p-2 bg-gray-100 rounded-full md:hidden focus:outline-none focus:ring hover:bg-gray-200">
                                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </button>

                                    <!-- avatar button -->
                                    <div class="relative" x-data="{ isOpen: false }">
                                        <button @click="isOpen = !isOpen" class="p-1 bg-gray-200 rounded-full focus:outline-none focus:ring">
                                            <img class="object-cover w-8 h-8 rounded-full" src="{{ Storage::disk('do')->url('avatar/'. Auth::user()->avatar)}}" alt="avatar" />
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
    </div>

</x-guest-layout>
