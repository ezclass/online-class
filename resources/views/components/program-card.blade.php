<div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
    <img class="w-full max-h-56" src="{{$program->image}}" alt="image" />
    <!--{{ asset('storage/class_image/'. $program->image )}} -->
    <div class="badge absolute top-0 right-0 bg-red-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded">Rs:{{ $program->fees }}</div>
    <div class="info-box text-xs flex p-1 font-semibold text-gray-500 bg-gray-300">
        <span class="mr-3 p-1 px-2 font-bold"></span>
        <span class="mr-2 p-1 px-2 font-bold  border-gray-400">{{ $program->language->name }}</span>
        <span class="mr-2 p-1 px-2 font-bold border-l border-gray-400">
            <span class="badge bg-indigo-500 text-blue-100 rounded px-1 text-xs font-bold">{{ $program->grade->name }}</span>
        </span>
    </div>
    <div class="desc p-4 text-gray-800">
        <span class="title text-xl block">{{ $program->subject->name }}</span>
        <h6 class="mt-8 text-sm font-medium">Clas Start Date : <span class="text-indigo-700">{{ $program->start_date->format('M d,Y')}}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class End Date : <span class="text-indigo-700">{{ $program->end_date->format('M d,Y') }}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class Day : <span class="text-indigo-700">{{ $program->day}}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class Time : <span class="text-indigo-700">{{ $program->start_time}} to {{ $program->end_time}}</span></h6>
        <p class="mt-8 text-sm text-gray-800 text-center">
            <img src="{{ asset('storage/avatar/'. $program->teacher->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
            <a href="javascript:void(0)"><span class="text-indigo-700 cursor-pointer">{{ $program->teacher->name }}</span></a>
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
