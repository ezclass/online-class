<x-app-layout>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    @can('create', $program)
        <x-program-video :program="$program" />
        <x-addition-form :program="$program" />
    @endcan

    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                    src="{{ Storage::disk('do')->url('program/' . $program->image) }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <p class="mt-8 text-sm text-gray-800 text-center">
                        <a href="{{ route('public.dashboard', $program->teacher->getRouteKey()) }}">
                            <img src="{{ Storage::disk('do')->url('avatar/' . $program->teacher->avatar) }}"
                                alt="avatar" class="inline-block h-10 w-10 rounded-full ring-2 ring-white">
                            <span
                                class="text-sm title-font text-gray-800 tracking-widest">{{ $program->teacher->name }}</span>
                        </a>
                    </p>
                    <div class="mt-3 text-gray-900 text-4xl title-font font-medium mb-1">{{ $program->subject->name }}
                    </div>
                    <div class="flex mb-4">
                        <span class="flex items-center">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <span class="text-gray-600 ml-3">4 Reviews</span>
                        </span>
                    </div>

                    <div class="grid  grid-cols-2">
                        <span class="title-font font-medium text-2xl text-gray-900">Rs.{{ $program->fees }}</span>
                        <div class="flex text-center">
                            @unlessrole('teacher')
                            <form action="{{ route('enroll.request') }}" method="POST">
                                @csrf
                                <input type="hidden" name="program_id" value="{{ $program->getRouteKey() }}">
                                <button
                                    class="flex ml-auto text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded">
                                    Enroll Class
                                </button>
                            </form>

                            <div
                                class="rounded-full w-4 h-4 p-0 border-0 inline-flex items-center justify-center text-red-500 ml-4  animate-ping">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="text-xs" viewBox="0 0 24 24">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                    </path>
                                </svg>
                            </div>
                            @endunlessrole
                        </div>
                    </div>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5"></div>
                    <p class="leading-relaxed">
                        {{ $program->description }}
                    </p>
                </div>
            </div>
            <div class="w-full mt-6 p-7" x-data="{ openTab: 1 }">
                <div>
                    <ul class="flex border-b">
                        <li class="-mb-px mr-1 cursor-pointer" @click="openTab = 1">
                            <span :class="openTab === 1 ? 'border-t text-blue-700 font-semibold bg-blue-200' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Curriculum</span>
                        </li>
                        <li class="mr-1 cursor-pointer" @click="openTab = 2">
                            <span :class="openTab === 2 ? 'border-t text-blue-700 font-semibold bg-blue-200' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">FAQ</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-blue-200 p-6">
                    <div id="" class="" x-show="openTab === 1">
                        <x-curriculum :lessons="$lessons" />
                    </div>
                    <div id="" class="" x-show="openTab === 2">
                        <x-addition-view :additions="$additions" />
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
