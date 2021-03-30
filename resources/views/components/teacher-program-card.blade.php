<div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
    <img class="w-full max-h-48" src="{{$program->image}}" alt="image" />
    <!--{{ asset('storage/class_image/'. $program->image )}} -->
    <div class="badge absolute top-0 right-0 bg-red-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded">Rs:{{ $program->fees }}</div>
    <div class="info-box text-xs flex p-1 font-semibold text-gray-500 bg-gray-300">
        <span class="mr-1 p-1 px-2 font-bold">All Students : {{ $program->enrolments->count() }}</span>
        <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">{{ $program->language->name }}</span>
        <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">{{ $program->grade->name }}</span>
    </div>
    <div class="desc p-4 text-gray-800">
        <span class="title font-bold block">{{ $program->subject->name }}</span>
        <h6 class="mt-8 text-sm font-medium">Clas Start Date : <span class="text-indigo-700">{{ $program->start_date}}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class End Date : <span class="text-indigo-700">{{ $program->end_date }}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class Day : <span class="text-indigo-700">{{ $program->day}}</span></h6>
        <div class="m-6">
            <a href="{{route('payment.detail',$program)}}" class="description text-sm  py-2 border-gray-400 mb-2 text-indigo-500 inline-flex items-center">More Detail
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <div class="text-center leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <span class="text-blue-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <a href="{{route('program.view',$program->getRouteKey())}}">
                    Lessons
                </a>
            </span>
            <span class="text-yellow-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <a href="{{route('update.program.view',$program->getRouteKey())}}">
                    Update
                </a>
            </span>
            <span class="text-red-400 inline-flex items-center leading-none text-sm">
                <a href="{{route('delete.program', $program->getRouteKey())}}">
                    Delete
                </a>
            </span>
        </div>
    </div>
</div>
