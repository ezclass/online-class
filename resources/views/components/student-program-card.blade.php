@forelse($enrolments as $enrolment)
<div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
    <img class="w-full max-h-48" src="{{$enrolment->program->image}}" alt="image" />
    <!--{{ asset('storage/class_image/'. $enrolment->program->image )}} -->
    @if ($enrolment->payment_policy == 0)
    <div class="badge absolute top-0 right-0 bg-green-500 m-1 text-gray-100 p-1 px-2 text-xs font-bold rounded">
        Free Card
    </div>
    @elseif ($enrolment->payment_policy == 50)
    <div class="badge absolute top-0 right-0 bg-blue-500 m-1 text-gray-100 p-1 px-2 text-xs font-bold rounded">
        Rs:{{ $enrolment->program->fees/2 }} ( 50% Offer )
    </div>
    @elseif ($enrolment->payment_policy == 100)
    <div class="badge absolute top-0 right-0 bg-red-500 m-1 text-gray-100 p-1 px-2 text-xs font-bold rounded">
        Rs:{{ $enrolment->program->fees }}
    </div>
    @endif

    <div>
        @if ($enrolment->remind !== null)
        <div class="badge absolute top-40 right-14 bg-red-500 m-1 text-gray-100 p-1 px-2 text-xs font-bold rounded">
            {{ $enrolment->remind }}
        </div>
        @endif
    </div>
    <div class="info-box text-xs flex p-1 font-semibold text-gray-500 bg-gray-300">
        <span class="mr-1 p-1 px-2 font-bold">All Students : {{ $enrolment->program->enrolments->count() }}</span>
        <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">{{ $enrolment->program->language->name }}</span>
        <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">{{$enrolment->program->grade->name}}</span>
    </div>
    <div>
        @if ($enrolment->accepted_at == null)
        <div>
            <span class="text-yellow-500 p-4"><i>Wait until approved</i></span>
        </div>
        @else
        <div>
            <span class="text-green-500 p-4"><i>You have been approved</i></span>
        </div>
        @endif

        @if ($enrolment->accepted_at !== null)
        <div class="mt-2 ml-4">
            <a href="{{route('payment.history',[$enrolment, $enrolment->student])}}" class="description text-sm  border-gray-400  text-indigo-500 inline-flex items-center">
                Payment History
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
        @endif
    </div>

    <div class="desc p-4 text-gray-800">
        <span class="title font-bold block">{{$enrolment->program->subject->name}}</span>
        <h6 class="mt-8 text-sm font-medium">Clas Start Date : <span class="text-indigo-700">{{ $enrolment->program->start_date->format('M d,Y')}}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class End Date : <span class="text-indigo-700">{{ $enrolment->program->end_date->format('M d,Y') }}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class Day : <span class="text-indigo-700">{{ $enrolment->program->day}}</span></h6>
        <h6 class="mt-2 text-sm font-medium">Class Time : <span class="text-indigo-700">{{ $enrolment->program->start_time->format('h:m A')}} To {{ $enrolment->program->end_time->format('h:m A')}}</span></h6>

        @if ($enrolment->accepted_at !== null)
        @if ($enrolment->payment_date == 1)
        <h6 class="mt-2 text-sm font-medium">Payment Date : <span class="text-indigo-700">Daily</span></h6>
        @elseif ($enrolment->payment_date == 7)
        <h6 class="mt-2 text-sm font-medium">Payment Date : <span class="text-indigo-700">{{$enrolment->payment_date}} ( First Week )</span></h6>
        @elseif ($enrolment->payment_date == 14)
        <h6 class="mt-2 text-sm font-medium">Payment Date : <span class="text-indigo-700">{{$enrolment->payment_date}} ( Second Week )</span></h6>
        @elseif ($enrolment->payment_date == 21)
        <h6 class="mt-2 text-sm font-medium">Payment Date : <span class="text-indigo-700">{{$enrolment->payment_date}} ( Third Week )</span></h6>
        @else
        <h6 class="mt-2 text-sm font-medium">Payment Date : <span class="text-indigo-700">{{$enrolment->payment_date}} ( Last Week )</span></h6>
        @endif
        @endif

        <div class="m-6">
            <span class="text-md font-light text-gray-800 dark:text-gray-400">
                <img src="{{ asset('storage/avatar/'. $enrolment->program->teacher->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
                {{$enrolment->program->teacher->name}}
            </span>
        </div>

        <div class=" text-center leading-none flex justify-center absolute bottom-0 left-0 w-full py-2">
            @if ($enrolment->accepted_at !== null)
            <span class="text-blue-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <a href="{{route('program.view',$enrolment->program->getRouteKey())}}">
                    Lessons
                </a>
            </span>
            @endif
            @if ($enrolment->accepted_at !== null and $enrolment->payment_policy !== 0)
            <span class="text-yellow-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <a href="{{route('checkout.option',$enrolment)}}">
                    Pay class fees
                </a>
            </span>
            @endif

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
