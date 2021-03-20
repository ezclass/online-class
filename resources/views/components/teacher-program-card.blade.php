<div class="flex flex-col items-center justify-center bg-white p-4 shadow rounded-lg">
    <div class="shadow h-64 rounded z-10">
        <img src="{{$program->image}}" alt="" class="h-full w-full object-cover overflow-hidden rounded" />
    </div>
    <h5 class="mt-2 text-sm font-medium">{{ $program->language->name }}</h5>
    <h2 class="mt-2 font-bold text-xl">{{ $program->subject->name }}</h2>
    <h6 class="mt-2 text-sm">{{ $program->grade->name }}</h6>

    <p class="mt-3 text-xl text-indigo-800 text-center pb-3">Rs:{{ $program->fees }}</p>
    <div class="mt-2 flex space-x-4">
        <a href="{{route('program.view',$program->getRouteKey())}}">
            <x-primary-button>
                Lesson
            </x-primary-button>
        </a>
        <a href="{{route('update.program.view',$program->getRouteKey())}}">
            <x-success-button>
                Update
            </x-success-button>
        </a>

        <a href="{{route('delete.program', $program->getRouteKey())}}">
            <x-danger-button class="">
                Delete
            </x-danger-button>
        </a>

    </div>
</div>
