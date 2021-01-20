<x-app-layout>
    <!-- Card code block start -->
    <div class="bg-white shadow rounded">
        <div class="relative">
            <img class="h-56 shadow rounded-t w-full object-cover object-center" src="{{ asset('storage/home/banner.jpg')}}" alt="" />
            <div class="inset-0 m-auto w-24 h-24 absolute bottom-0 -mb-12 xl:ml-10 rounded border-2 shadow border-white">
                <img class="w-full h-full overflow-hidden object-cover rounded" src="{{ asset('storage/avatar/'. Auth::User()->avatar )}}" alt="avatar" />
            </div>
        </div>
        <div class="px-5 xl:px-10 pb-10">
            <div class="flex justify-center xl:justify-end w-full pt-16 xl:pt-5">
                <div class="flex items-center">
                    <svg class="w-4 mr-1 text-yellow-400 icon icon-tabler icon-tabler-star" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor" d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                    </svg>
                    <svg class="w-4 mr-1 text-yellow-400 icon icon-tabler icon-tabler-star" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor" d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                    </svg>
                    <svg class="w-4 mr-1 text-yellow-400 icon icon-tabler icon-tabler-star" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor" d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                    </svg>
                    <svg class="w-4 mr-1 text-yellow-400 icon icon-tabler icon-tabler-star" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor" d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                    </svg>
                    <svg class="w-4 text-gray-200 icon icon-tabler icon-tabler-star" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor" d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                    </svg>
                </div>
            </div>
            <div class="pt-3 xl:pt-5 flex flex-col xl:flex-row items-start xl:items-center justify-between">
                <div class="xl:pr-16 w-full xl:w-2/3">
                    <div class="text-center xl:text-left mb-3 xl:mb-0 flex flex-col xl:flex-row items-center justify-between xl:justify-start">
                        <h2 class="mb-3 xl:mb-0 xl:mr-4 text-2xl text-gray-800 font-medium tracking-normal">
                            {{Auth::User()->name}}
                        </h2>
                    </div>
                    <p class="text-center xl:text-left mt-2 text-sm tracking-normal text-gray-600 leading-5">

                    </p>
                </div>
                <div class="xl:px-10 xl:border-l xl:border-r w-full py-5 flex items-start justify-center xl:w-1/3">
                    <div class="mr-6 xl:mr-10">
                        <h2 class="text-gray-600 font-bold text-xl xl:text-2xl leading-6 mb-2 text-center">
                            82
                        </h2>
                        <p class="text-gray-800 text-sm xl:text-xl leading-5">
                            Reviews
                        </p>
                    </div>
                    <div class="mr-6 xl:mr-10">
                        <h2 class="text-gray-600 font-bold text-xl xl:text-2xl leading-6 mb-2 text-center">
                            28
                        </h2>
                        <p class="text-gray-800 text-sm xl:text-xl leading-5">
                            Classes
                        </p>
                    </div>
                    <div>
                        <h2 class="text-gray-600 font-bold text-xl xl:text-2xl leading-6 mb-2 text-center">
                            42
                        </h2>
                        <p class="text-gray-800 text-sm xl:text-xl leading-5">
                            Students
                        </p>
                    </div>
                </div>
                <div class="w-full xl:w-2/3 flex-col md:flex-row justify-center xl:justify-end flex md:pl-6">
                    <div class="flex items-center justify-center xl:justify-start mt-1 md:mt-0 mb-5 md:mb-0">
                        <div class="rounded-full bg-gray-200 text-gray-600 text-sm px-6 py-2 flex justify-center items-center">
                            Remote
                        </div>
                        <div class="ml-5 rounded-full bg-green-200 text-green-500 text-sm px-6 py-2 flex justify-center items-center">
                            Available
                        </div>
                    </div>
                    <button class="focus:outline-none ml-0 md:ml-5 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-3 md:px-6 py-2 text-sm">
                        Message
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Card code block end -->

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="container mx-auto pt-10 pb-10">
        <div class="lg:flex md:flex xl:justify-around sm:flex flex-wrap md:justify-around sm:justify-around lg:justify-around">
            @foreach($enrolRequest as $enrol)
            <div class="xl:w-1/3 sm:w-5/12 sm:max-w-xs xl:max-w-sm lg:w-1/2 w-11/12 mx-auto sm:mx-0">
                <div class="mt-10 max-w-sm mx-auto w-full px-4 py-3 bg-white dark:bg-gray-800 shadow-md rounded-md">
                    <div class="flex justify-between items-center">
                        <span class="text-md font-light text-gray-800 dark:text-gray-400">
                            <img src="{{ asset('storage/avatar/'. $enrol->program->teacher->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
                            {{$enrol->program->teacher->name}}
                        </span>

                        <span class="bg-indigo-200 dark:bg-indigo-300 text-indigo-800 dark:text-indigo-900 px-3 py-1 rounded-full uppercase text-xs">
                            {{$enrol->program->subject->name}}
                        </span>
                    </div>

                    <div>
                        <h4 class="text-sm font-semibold text-gray-800 dark:text-white mt-2">
                            @if ($enrol->accepted_at == null)
                            <span class="text-yellow-500">Wait until approved</span>
                            @else
                            <span class="text-green-500">You have been approved</span>
                            @endif
                        </h4>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                            Rs.{{$enrol->program->fees}}
                        </p>
                    </div>

                    <div>
                        <div class="flex items-center justify-center mt-4">
                            @if ($enrol->accepted_at !== null)

                            <svg class="text-gray-500 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <span class="text-gray-500">
                                <a href="{{route('lesson',$enrol->program->getRouteKey())}}">
                                    show lessons
                                </a>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>