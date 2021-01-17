<x-app-layout>
    <div class="mt-20 px-4  max-w-3xl mx-auto space-y-6">
        <form action="{{route('filter')}}" method="GET">
            <div class="flex space-x-4">
                <div class="w-1/2 relative">
                    <x-label for="">Select Meadiam</x-label>
                    <select class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" id="language_id" name="language_id" onchange="random_function()" required>
                        <option selected disabled>Meadiam</option>
                        @foreach($language as $lan)
                        <option value="{{$lan->id}}">{{$lan->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="w-1/2">
                    <x-label for="">Select Subject</x-label>
                    <select id="subject_id" name="subject_id" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                        <option selected disabled>Subject</option>
                        @foreach($subject as $sub)
                        <option value="{{$sub->id}}">{{$sub->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <x-success-button class="ml-3 mt-5">
                {{ __('Submit') }}
            </x-success-button>
        </form>
    </div>

    <div class="container mx-auto pt-16">
        <div class="lg:flex md:flex xl:justify-around sm:flex flex-wrap md:justify-around sm:justify-around lg:justify-around">
            @foreach($program as $class)
            <div class="xl:w-1/3 sm:w-5/12 sm:max-w-xs relative mb-32 lg:mb-20 xl:max-w-sm lg:w-1/2 w-11/12 mx-auto sm:mx-0">
                <div class="shadow h-64 rounded z-10">
                    <img src="{{$class->image}}" alt="" class="h-full w-full object-cover overflow-hidden rounded" />
                </div>
                <div class="p-6 shadow-lg w-11/12 mx-auto -mt-20 bg-white rounded z-20 relative">
                    <p class="text-sm text-indigo-700 text-center pb-3">{{ $class->grade->name }}</p>
                    <p class="text-sm text-indigo-700 text-center pb-3">{{ $class->subject->name }}</p>
                    <p class="text-lg text-gray-800 text-center pb-3">The way I drive and handle a car, is an expression of my inner feeling.</p>
                    <p class="text-sm text-indigo-700 text-center pb-3">Rs:{{ $class->fees }}</p>
                    <p class="text-sm text-gray-800 text-center">
                        <img src="{{ asset('storage/avatar/'. $class->users->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
                        <a href="javascript:void(0)"><span class="text-indigo-700 cursor-pointer">{{ $class->users->name }}</span></a>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{ $program->links() }}


    <x-footer>
    </x-footer>
</x-app-layout>
