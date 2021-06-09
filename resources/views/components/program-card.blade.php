<div class="each mb-10 m-2 shadow-lg border-gray-800 bg-white relative rounded">
    <img class="w-full  h-52" src="{{ Storage::disk('do')->url('program/' . $program->image) }}" alt="image" />
    <div class="badge absolute top-0 right-0 bg-red-500 m-1 text-white p-1 px-2 text-sm font-bold rounded">
        Rs:{{ $program->fees }}</div>
    <div class="info-box text-xs flex p-1 font-semibold text-gray-500 bg-gray-300">
        <span class="mr-2 p-1 px-2 text-sm  text-gray-800">{{ $program->language->name }}</span>
        <span class="mr-2 p-1 px-2 font-bold border-l border-gray-400">
            <span
                class="badge bg-indigo-500 text-blue-100 rounded px-1 text-sm font-bold">{{ $program->grade->name }}</span>
        </span>
    </div>
    <div class="desc p-4">
        <div class="h-20">
            <span class="title text-lg text-black block">{{ $program->subject->name }}</span>
            ( {{ $program->class_type }} )
        </div>

        <h6 class=" text-sm font-medium">Clas Start Date : <span
                class="text-indigo-700">{{ $program->start_date->format('M d,Y') }}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class End Date : <span
                class="text-indigo-700">{{ $program->end_date->format('M d,Y') }}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class Day : <span class="text-indigo-700">{{ $program->day }}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class Time : <span
                class="text-indigo-700">{{ $program->start_time->format('h:i A') }} To
                {{ $program->end_time->format('h:i A') }}</span></h6>
        <p class="mt-8 text-sm text-gray-800 text-center">
            <a href="{{ route('public.dashboard', $program->teacher->getRouteKey()) }}">
                <img src="{{ Storage::disk('do')->url('avatar/' . $program->teacher->avatar) }}" alt="avatar"
                    class="inline-block h-10 w-10 rounded-full ring-2 ring-white">
                <span class="text-indigo-700 cursor-pointer underline">{{ $program->teacher->name }}</span>
            </a>
        </p>
    </div>
    <div class="text-center w-full py-4">
        <a href="{{ route('enroll.program', $program->getRouteKey()) }}"
            class="text-center text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded">
            Enroll Class
        </a>
    </div>
</div>
