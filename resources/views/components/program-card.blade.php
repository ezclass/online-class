<div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
    <img class="w-full max-h-56" src="{{Storage::disk('do')->url('program/'.$program->image)}}" alt="image" />
    <div class="badge absolute top-0 right-0 bg-red-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded">Rs:{{ $program->fees }}</div>
    <div class="info-box text-xs flex p-1 font-semibold text-gray-500 bg-gray-300">
        <span class="mr-2 p-1 px-2 text-sm  text-gray-800">{{ $program->language->name }}</span>
        <span class="mr-2 p-1 px-2 font-bold border-l border-gray-400">
            <span class="badge bg-indigo-500 text-blue-100 rounded px-1 text-sm font-bold">{{ $program->grade->name }}</span>
        </span>
    </div>
    <div class="desc p-4">
        <span class="title text-xl text-black block">{{ $program->subject->name }}</span>
        ( {{ $program->class_type }} )
        <h6 class="mt-4 text-sm font-medium">Clas Start Date : <span class="text-indigo-700">{{ $program->start_date->format('M d,Y')}}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class End Date : <span class="text-indigo-700">{{ $program->end_date->format('M d,Y') }}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class Day : <span class="text-indigo-700">{{ $program->day}}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class Time : <span class="text-indigo-700">{{ $program->start_time->format('h:i A')}} To {{ $program->end_time->format('h:i A')}}</span></h6>
        <p class="mt-8 text-sm text-gray-800 text-center">
            <a href="{{route('public.dashboard',$program->teacher->getRouteKey())}}">
                <img src="{{ Storage::disk('do')->url('avatar/'. $program->teacher->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
                <span class="text-indigo-700 cursor-pointer">{{ $program->teacher->name }}</span>
            </a>
        </p>

        <div class="text-center w-full py-4">
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
