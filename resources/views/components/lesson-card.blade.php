<div class="mt-2 w-full max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <div>
        <h1 class="mt-2 text-lg font-semibold text-gray-800 dark:text-white">{{$lesson->name}}</h1>
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">{{$lesson->starts_at->format('M d,Y')}} - {{$lesson->starts_at->format('h:i A')}} - {{$lesson->ends_at->format('h:i A')}}</p>
    </div>

    <div class="mt-4">
        {{$lesson->note}}
    </div>

    <div>
        <div class="flex items-center justify-center mt-4">
            <a href="{{route('overview',$lesson)}}" class="mr-4 text-green-500 cursor-pointer dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                Learning Room
            </a>

            @can('update', $lesson)
            <a href="{{route('lesson.edit',$lesson->getRouteKey())}}" class="ml-4 mr-4 text-yellow-500 cursor-pointer dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                Update
            </a>

            <a href="{{route('delete.lesson',$lesson->getRouteKey())}}" class="ml-4 text-red-500 cursor-pointer dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                Delete
            </a>
            @endcan

        </div>
    </div>
</div>
