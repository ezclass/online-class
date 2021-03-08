<div class="flex flex-col items-center justify-center bg-white p-4 shadow rounded-lg">
    <div class="shadow h-64 rounded z-10">
        <img src="{{$program->image}}" alt="" class="h-full w-full object-cover overflow-hidden rounded" />
    </div>
    <h5 class="mt-2 text-sm font-medium">{{ $program->language->name }}</h5>
    <h2 class="mt-2 font-bold text-xl">{{ $program->subject->name }}</h2>
    <h6 class="mt-2 text-sm font-medium">{{ $program->grade->name }}</h6>
    <p class="mt-2 text-sm text-gray-800 text-center">
        <img src="{{ asset('storage/avatar/'. $program->teacher->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
        <a href="javascript:void(0)"><span class="text-indigo-700 cursor-pointer">{{ $program->teacher->name }}</span></a>
    </p>
    <p class="mt-3 text-xl text-indigo-800 text-center pb-3">Rs:{{ $program->fees }}</p>
    <div class="text-center m-2">
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
