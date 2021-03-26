<div class="p-4 lg:w-1/3">
    <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-8 pb-24 rounded-lg overflow-hidden text-center relative">
        <h2 class="tracking-widest text-xs text-left title-font font-medium text-gray-400 mb-1">All Students : {{ $program->enrolments->count() }}</h2>
        <div class="mt-4">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">{{ $program->grade->name }}</h2>
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1"> {{ $program->language->name }}</h2>
        </div>
        <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $program->subject->name }}</h1>
        <div class="mt-3 text-xl text-indigo-800 pb-3 text-left">
            Rs:{{ $program->fees }}
        </div>
        <p class="leading-relaxed mb-3"> </p>
        <a href="" class="text-indigo-500 inline-flex items-center">More Detail
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
            </svg>
        </a>
        <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <a href="{{route('program.view',$program->getRouteKey())}}">
                    <x-primary-button>
                        Lessons
                    </x-primary-button>
                </a>
            </span>
            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <a href="{{route('update.program.view',$program->getRouteKey())}}">
                    <x-success-button>
                        Update
                    </x-success-button>
                </a>
            </span>
            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <a href="{{route('delete.program', $program->getRouteKey())}}">
                    <x-danger-button class="">
                        Delete
                    </x-danger-button>
                </a>
            </span>
        </div>
    </div>
</div>
