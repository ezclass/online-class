<x-app-layout>
    <div class="mt-20 px-4  max-w-3xl mx-auto space-y-6">
        <form action="{{route('fetch.class')}}" method="GET">
            <div class="flex space-x-4">
                <div class="w-1/2 relative">
                    <x-label for="">Select Grade</x-label>
                    <select id="grade" name="grade" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500">
                        <option selected disabled>Grade</option>
                        @foreach($grade as $grd)
                        <option value="{{$grd->getRouteKey()}}">{{$grd->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="w-1/2">
                    <x-label for="">Select Subject</x-label>
                    <select id="subject" name="subject" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500">
                        <option selected disabled>Subject</option>
                        @foreach($subject as $sub)
                        <option value="{{$sub->getRouteKey()}}">{{$sub->name}}</option>
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
            @foreach($programs as $class)
            <div class="xl:w-1/3 sm:w-5/12 sm:max-w-xs relative mb-32 lg:mb-20 xl:max-w-sm lg:w-1/2 w-11/12 mx-auto sm:mx-0">
                <div class="shadow h-64 rounded z-10">
                    <img src="{{$class->image}}" alt="" class="h-full w-full object-cover overflow-hidden rounded" />
                </div>
                <div class="p-6 shadow-lg w-11/12 mx-auto -mt-20 bg-white rounded z-20 relative">
                    <p class="text-sm text-yellow-800 text-center pb-3">{{ $class->language->name }}</p>
                    <p class="text-sm text-gray-800 text-center pb-3">{{ $class->grade->name }}</p>
                    <p class="text-sm text-gray-800 text-center pb-3">{{ $class->subject->name }}</p>
                    <p class="text-sm text-indigo-800 text-center pb-3">Rs:{{ $class->fees }}</p>
                    <p class="text-sm text-gray-800 text-center">
                        <img src="{{ asset('storage/avatar/'. $class->teacher->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
                        <a href="javascript:void(0)"><span class="text-indigo-700 cursor-pointer">{{ $class->teacher->name }}</span></a>
                    </p>

                    <div class="text-center m-5">
                        @role('teacher')
                        @else
                        <form action="{{route('enroll.request')}}" method="POST">
                            @csrf
                            <input type="hidden" name="program_id" value="{{$class->getRouteKey()}}">
                            <x-success-button class="text-md text-center">
                                {{ __('Enroll Class') }}
                            </x-success-button>
                        </form>
                        @endrole
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{ $programs->links() }}

    <x-footer>
    </x-footer>
</x-app-layout>
