<div class="mt-2 w-full max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <div class="flex items-center justify-between">
        <span class="text-sm font-light text-gray-800 dark:text-gray-400">No.</span>
        <span class="px-3 py-1 text-xs text-indigo-800 uppercase bg-indigo-200 rounded-full dark:bg-indigo-300 dark:text-indigo-900">{{$lesson->name}}</span>
    </div>

    <div>
        <h1 class="mt-2 text-lg font-semibold text-gray-800 dark:text-white">AP® Psychology - Course 5: Health and Behavior</h1>
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">{{$lesson->starts_at}} <br> {{$lesson->ends_at}}</p>
    </div>

    <div>
        <div class="flex items-center justify-center mt-4">
            <a href="{{route('learning-room-view',$lesson)}}" class="mr-4 text-green-500 cursor-pointer dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
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
