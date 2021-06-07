<div class="mt-2 w-full max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <div>
        <h1 class="mt-2 text-lg font-semibold text-gray-800 dark:text-white">{{ $lesson->name }}</h1>
        <p class="mt-2 text-sm text-gray-900 dark:text-gray-300">
            <b>{{ $lesson->class_date->isoFormat('MMM Do Y') }} , {{ $lesson->program->start_time->format('h:i: A') }}
                To {{ $lesson->program->end_time->format('h:i: A') }}</b>
        </p>
    </div>

    <div class="mt-4">
        {{ $lesson->description }}
    </div>

    <div>
        <div class="flex items-center justify-center mt-4">
            <a href="{{ route('overview', $lesson) }}"
                class="text-green-400 mr-3 inline-flex items-center leading-none text-md pr-3 py-1 border-r-2 border-green-200  px-3 text-sm font-semibold  bg-green-100 rounded-full hover:text-gray-700 dark:hover:text-gray-300">
                Learning Room
            </a>

            @can('update', $lesson)
                <a href="{{ route('lesson.edit', $lesson->getRouteKey()) }}"
                    class="text-yellow-400 mr-3 inline-flex items-center leading-none text-md pr-3 py-1 border-r-2 border-yellow-200  px-3 text-sm font-semibold  bg-yellow-100 rounded-full hover:text-gray-700 dark:hover:text-gray-300">
                    Update
                </a>
            @endcan
        </div>
    </div>
</div>
