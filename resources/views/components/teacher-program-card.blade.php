<div class="hover:bg-gray-100 m-7 max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden md:max-w-2xl">
    <div class="sm:flex">
        <div class="md:flex-shrink-0">
            <img class="h-48 w-full object-cover md:w-48" src="{{ asset('storage/class_image/'.$program->image)}}" alt="Man looking at item at a store">
        </div>
        <div class="p-8">
            <div class="uppercase tracking-wide text-lg text-indigo-500 font-semibold">{{ $program->name }}</div>
            <div class="block mt-1 text-lg leading-tight font-medium text-black">{{ $program->grade->name }}</div>
            <p class="mt-2 text-gray-500">{{ $program->subject->name }}</p>
            <p>{{ $program->language->name }}</p>
            <p>
            <div class="mt-2 flex space-x-4">
                <a href="{{route('lesson',$program->getRouteKey())}}">
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
            </p>
        </div>
    </div>
</div>
