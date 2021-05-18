<x-guest-layout>

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
                    <div x-show.in.out.opacity="isSidebarOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
                    </div>

                    <!-- Sidebar -->
                    <aside x-transition:enter="transition transform duration-300" x-transition:enter-start="-translate-x-full opacity-30  ease-in" x-transition:enter-end="translate-x-0 opacity-100 ease-out" x-transition:leave="transition transform duration-300" x-transition:leave-start="translate-x-0 opacity-100 ease-out" x-transition:leave-end="-translate-x-full opacity-0 ease-in" class="fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-64 max-h-screen overflow-hidden transition-all transform bg-white border-r
                shadow-lg lg:z-auto lg:static lg:shadow-none" :class="{'-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen}">

                        <!-- sidebar header -->
                        <div class="flex items-center justify-between flex-shrink-0 p-2" :class="{'lg:justify-center': !isSidebarOpen}">
                            <span class="p-2 text-xl font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">
                                <span :class="{'lg:hidden': !isSidebarOpen}">HomeClass</span>
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

                                <x-responsive-nav-link :href="route('overview',$lesson)" :active="request()->routeIs('overview',$lesson)">
                                    {{ __('Overview') }}
                                </x-responsive-nav-link>

                                <x-responsive-nav-link :href="route('meet',$lesson)" :active="request()->routeIs('meet',$lesson)">
                                    {{ __('Meet') }}
                                </x-responsive-nav-link>

                                <x-responsive-nav-link :href="route('document',$lesson)" :active="request()->routeIs('document',$lesson)">
                                    {{ __('document') }}
                                </x-responsive-nav-link>

                            </ul>
                        </nav>
                    </aside>

                    <div class="flex bg-gray-100 flex-col flex-1 h-full overflow-hidden">
                        <!-- Navbar -->
                        <header class="flex-shrink-0 border-b">
                            <div class="flex items-center justify-between p-2">
                                <!-- Navbar left -->
                                <div class="flex items-center space-x-3">
                                    <span class="p-2 text-xl font-semibold tracking-wider uppercase lg:hidden">Menu</span>
                                    <!-- Toggle sidebar button -->
                                    <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none focus:ring">
                                        <svg class="w-4 h-4 text-gray-600" :class="{'transform transition-transform -rotate-180': isSidebarOpen}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>
                                <a href="{{route('program.view',$lesson->program)}}"> Lesson</a>
                                <!-- Navbar right -->
                                <div class="relative flex items-center space-x-3">
                                    <x-notification />

                                    <!-- avatar button -->
                                    <div class="relative" x-data="{ isOpen: false }">
                                        <div>
                                            <x-dropdown-link href="{{ route('dashboard') }}">
                                                <img class="object-cover w-8 h-8 rounded-full" src="{{ Storage::disk('do')->url('avatar/'. Auth::user()->avatar)}}" alt="Ahmed Kamel">
                                            </x-dropdown-link>
                                        </div>

                                        <!-- green dot -->
                                        <div class="absolute right-0 p-1 bg-green-400 rounded-full bottom-3 animate-ping"></div>
                                        <div class="absolute right-0 p-1 bg-green-400 border border-white rounded-full bottom-3"></div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Main content -->
                        <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">

                            <main>
                                {{ $slot }}
                            </main>

                        </main>
                        <!-- Main footer -->
                        <footer class="flex items-center justify-between flex-shrink-0 p-4 border-t max-h-14">
                            <div>ezclass &copy; 2021</div>
                            <div class="text-sm">
                                Made by
                                <a class="text-blue-400 underline"  target="_blank" rel="noopener noreferrer">zencemart software company</a>
                            </div>
                            <div>
                                <!-- Github svg -->
                            </div>
                        </footer>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js">
                </script>
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
    </div>

</x-guest-layout>
