<div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
    <img class="w-full h-52" src="{{ Storage::disk('do')->url('program/' . $program->image) }}" alt="image" />
    <div class="badge absolute top-0 right-0 bg-red-500 m-1 text-white p-1 px-2 text-xs font-bold rounded">
        Rs:{{ $program->fees }}</div>
    <div class="h-12 info-box text-xs flex p-1 font-semibold text-gray-500 bg-gray-300">
        <span class="mr-1 p-1 px-2 font-bold">All Students : {{ $program->enrolments->count() }}</span>
        <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">{{ $program->language->name }}</span>
        <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">{{ $program->grade->name }}</span>
    </div>

    <div class="desc p-4 text-gray-800">
        <div class="h-16">
            @if ($program->status == 0)
                <div>
                    Publish Class
                    <a href="{{ route('status.publish', $program) }}">
                        <span class="ml-4 border rounded-full border-grey flex items-center w-12 justify-start">
                            <span class="rounded-full border w-6 h-6 border-grey bg-red-500 shadow">
                            </span>
                        </span>
                    </a>
                </div>

            @else
                <div>
                    Unpublish Class
                    <a href="{{ route('status.unpublish', $program) }}">
                        <span class="ml-4 border rounded-full border-grey flex items-center w-12 bg-green justify-end">
                            <span class="rounded-full border w-6 h-6 border-grey bg-green-500 shadow">
                            </span>
                        </span>
                    </a>
                </div>
            @endif
        </div>
        <div class="h-20 mt-2">
            <span class="title font-bold block">{{ $program->subject->name }}</span>
            ( {{ $program->class_type }} )
        </div>
        <span
            class="text-yellow-400 hover:text-black mr-3 inline-flex items-center leading-none text-md pr-3 py-1 border-r-2 border-yellow-200  px-3 text-xs font-semibold  bg-yellow-100 rounded-full">
            <a href="{{ route('enroll.program', $program->getRouteKey()) }}">
                Additional Additions
            </a>
        </span>
        <h6 class="mt-4 text-sm font-medium">Clas Start Date : <span
                class="text-indigo-700">{{ $program->start_date->format('M d,Y') }}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class End Date : <span
                class="text-indigo-700">{{ $program->end_date->format('M d,Y') }}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class Day : <span class="text-indigo-700">{{ $program->day }}</span>
        </h6>
        <h6 class="mt-2 text-sm font-medium">Class Time : <span
                class="text-indigo-700">{{ $program->start_time->format('h:i A') }} To
                {{ $program->end_time->format('h:i A') }}</span></h6>
        <div class="mt-4">
            <a href="{{ route('student.detail', $program) }}"
                class="description text-sm  border-gray-400  text-indigo-500 inline-flex items-center">
                Student Details
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <div class="mt-4 mb-6">
            <a href="{{ route('income.detail', $program) }}"
                class="description text-sm  py-2 border-gray-400 mb-2 text-indigo-500 inline-flex items-center">
                Income Details
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <div class="mt-2 text-center leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <span
                class="text-blue-400 mr-3 inline-flex items-center leading-none text-md pr-3 py-1 border-r-2 border-gray-200  px-3 text-xs font-semibold  bg-blue-100 rounded-full">
                <a href="{{ route('program.view', $program->getRouteKey()) }}">
                    Lessons
                </a>
            </span>
            <span
                class="text-red-400 inline-flex items-center leading-none text-md px-3 text-xs font-semibold  bg-red-100 rounded-full">
                <a href="{{ route('update.program.view', $program->getRouteKey()) }}">
                    Update
                </a>
            </span>
        </div>
    </div>
</div>
