<div class="pt-2 w-full border-t">
    <label class="block p-5 leading-normal cursor-pointer">
        {{$lesson->name}}
        <span class="ml-10">{{$lesson->date}} {{$lesson->starts_at}} {{$lesson->ends_at}}</span>
    </label>

    <div class="overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
        <div class="">
            <a href="">
                <x-primary-button>
                    Lesson Room
                </x-primary-button>
            </a>

            @can('update',$lesson)
            <a href="{{route('update.lesson.view',$lesson->getRouteKey())}}">
                <x-success-button>
                    Update
                </x-success-button>
            </a>
            @endcan

            @can('delete',$lesson)
            <a href="{{route('delete.lesson',$lesson->getRouteKey())}}">
                <x-danger-button>
                    Delete
                </x-danger-button>
            </a>
            @endcan
        </div>
    </div>
</div>
