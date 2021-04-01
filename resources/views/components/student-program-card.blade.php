@forelse($enrolments as $enrolment)
<div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
    <img class="w-full max-h-48" src="{{$enrolment->program->image}}" alt="image" />
    <!--{{ asset('storage/class_image/'. $enrolment->program->image )}} -->
    <div class="badge absolute top-0 right-0 bg-red-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded">Rs:{{ $enrolment->program->fees }}</div>
    <div class="info-box text-xs flex p-1 font-semibold text-gray-500 bg-gray-300">
        <span class="mr-1 p-1 px-2 font-bold">All Students : {{ $enrolment->program->enrolments->count() }}</span>
        <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">{{ $enrolment->program->language->name }}</span>
        <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">{{$enrolment->program->grade->name}}</span>
    </div>
    <div class="desc p-4 text-gray-800">
        <span class="title font-bold block">{{$enrolment->program->subject->name}}</span>
        <h6 class="mt-8 text-sm font-medium">Clas Start Date : <span class="text-indigo-700">{{ $enrolment->program->start_date->format('M d,Y')}}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class End Date : <span class="text-indigo-700">{{ $enrolment->program->end_date->format('M d,Y') }}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class Day : <span class="text-indigo-700">{{ $enrolment->program->day}}</span></h6>
        <div class="m-6">
            <span class="text-md font-light text-gray-800 dark:text-gray-400">
                <img src="{{ asset('storage/avatar/'. $enrolment->program->teacher->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
                {{$enrolment->program->teacher->name}}
            </span>
        </div>

        <div class=" text-center leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <span class="text-blue-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <a href="{{route('program.view',$enrolment->program->getRouteKey())}}">
                    Lessons
                </a>
            </span>
            <span class="text-yellow-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <a href="{{route('checkout.option',$enrolment->program)}}">
                    Pay class fees
                </a>
            </span>
            <span class="text-red-400 inline-flex items-center leading-none text-sm">
                <a href="{{route('enroled-program.delete',$enrolment)}}">
                    Delete
                </a>
            </span>
        </div>
    </div>
</div>

@empty
<div class="bg-blue-100 border border-blue-400 text-blue-700 p-3 rounded relative my-6  shadow" role="alert">
    <strong class="font-bold">hey!</strong>
    <span class="block sm:inline"> To enter class, click <a href="{{route('search-class')}}"><u>Find Classes</u></a></span>
</div>
@endforelse
