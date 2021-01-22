<div class="xl:w-1/3 sm:w-5/12 sm:max-w-xs relative mb-32 lg:mb-20 xl:max-w-sm lg:w-1/2 w-11/12 mx-auto sm:mx-0">
    <div class="shadow h-64 rounded z-10">
        <img src="{{$program->image}}" alt="" class="h-full w-full object-cover overflow-hidden rounded" />
    </div>
    <div class="p-6 shadow-lg w-11/12 mx-auto -mt-20 bg-white rounded z-20 relative">
        <p class="text-sm text-yellow-800 text-center pb-3">{{ $program->language->name }}</p>
        <p class="text-sm text-gray-800 text-center pb-3">{{ $program->grade->name }}</p>
        <p class="text-sm text-gray-800 text-center pb-3">{{ $program->subject->name }}</p>
        <p class="text-sm text-indigo-800 text-center pb-3">Rs:{{ $program->fees }}</p>
        <p class="text-sm text-gray-800 text-center">
            <img src="{{ asset('storage/avatar/'. $program->teacher->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
            <a href="javascript:void(0)"><span class="text-indigo-700 cursor-pointer">{{ $program->teacher->name }}</span></a>
        </p>

        <div class="text-center m-5">
            @unlessrole('teacher')
            <form action="{{route('enroll.request')}}" method="POST">
                @csrf
                <input type="hidden" name="program_id" value="{{$program->getRouteKey()}}">
                <x-success-button class="text-md text-center">
                    {{ __('Enroll Class') }}
                </x-success-button>
            </form>
            @endunlessrole
        </div>
    </div>
</div>
