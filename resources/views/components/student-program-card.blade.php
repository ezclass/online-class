@foreach($enrolments as $enrolment)
<div class="xl:w-1/3 sm:w-5/12 sm:max-w-xs xl:max-w-sm lg:w-1/2 w-11/12 mx-auto sm:mx-0">
    <div class="mt-10 max-w-sm mx-auto w-full px-4 py-3 bg-white dark:bg-gray-800 shadow-md rounded-md">
        <div class="flex justify-between items-center">
            <span class="text-md font-light text-gray-800 dark:text-gray-400">
                <img src="{{ asset('storage/avatar/'. $enrolment->program->teacher->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
                {{$enrolment->program->teacher->name}}
            </span>

            <span class="bg-indigo-200 dark:bg-indigo-300 text-indigo-800 dark:text-indigo-900 px-3 py-1 rounded-full uppercase text-xs">
                {{$enrolment->program->subject->name}}
            </span>
        </div>
        {{$enrolment->program->grade->name}}
        <div>
            <h4 class="text-sm font-semibold text-gray-800 dark:text-white mt-2">
                @if ($enrolment->accepted_at == null)
                <span class="text-yellow-500">Wait until approved</span>
                @else
                <span class="text-green-500">You have been approved</span>
                <p>
                    <a href="{{route('checkout',$enrolment->program)}}">Pay</a>
                </p>
                @endif
            </h4>
            <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                Rs.{{$enrolment->program->fees}}
            </p>
        </div>

        <div>
            <div class="flex items-center justify-center mt-4">
                @if ($enrolment->accepted_at !== null)

                <svg class="text-gray-500 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                <span class="text-gray-500">
                    <a href="{{route('program.view',$enrolment->program->getRouteKey())}}">
                        Show Lessons
                    </a>
                </span>
                @endif
            </div>
            <div>
                <a href="{{route('enroled-program.delete',$enrolment)}}">
                   Delete Class
                </a>

            </div>
        </div>
    </div>
</div>
@endforeach
