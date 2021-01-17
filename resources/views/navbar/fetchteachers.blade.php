<x-app-layout>
    @foreach($teacher as $teacher)
    <div class="hover:bg-gray-100 m-7 max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden md:max-w-2xl">
        <div class="sm:flex">
            <div class="md:flex-shrink-0">
                <img src="{{ asset('storage/avatar/'.$teacher->avatar)}}" class="h-48 w-full object-cover md:w-48" src="" alt="Man looking at item at a store">
            </div>
            <div class="w-2/3 p-4 md:p-4">
                <h1 class=" text-gray-800 dark:text-white font-bold text-2xl">{{ $teacher->name }}</h1>

                <p class="mt-2 text-gray-600 dark:text-gray-400 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit In odit</p>

                <div class="flex item-center mt-2">

                </div>

                <div class="flex item-center justify-between mt-3">
                    <h1 class="text-gray-700 dark:text-gray-200 font-bold text-lg md:text-xl">  </h1>
                    <x-button class="px-2 py-1 bg-gray-800 dark:bg-gray-700 text-white text-xs font-bold uppercase rounded hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600 ">
                        Show Classes
                    </x-button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <x-footer>
    </x-footer>
</x-app-layout>
