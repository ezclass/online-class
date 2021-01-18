<x-app-layout>
    @role('teacher')
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="mt-10 pt-8 pb-8 bg-yellow-100">
        create lesson
        <div class="px-4  max-w-3xl mx-auto space-y-6">
            <form action="{{route('create.lesson',$program->id)}}" method="POST">
                @csrf
                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <x-label for="">Your Lesson Name</x-label>
                        <input type="text" name="name" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Your Class Name" required>
                    </div>

                    <div class="w-1/2 relative">
                        <x-label for="">Date</x-label>
                        <input type="date" name="date" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="date" required>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <div class="w-1/2 relative">
                        <x-label for="">Time</x-label>
                        <input type="time" name="time" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="time" required>
                    </div>

                    <div class="w-1/2">
                        <x-label for="">Note</x-label>
                        <input type="text" name="note" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Note">
                    </div>
                </div>

                <x-success-button class="mt-3 ml-3">
                    {{ __('Create') }}
                </x-success-button>
            </form>
        </div>
    </div>
    @endrole


    <div lesson="panel-3 tab-content py-5">
        @foreach($lesson as $lesson)
        <div class="m-7">
            <div class="max-w-2xl mx-auto px-8 py-4 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                <div class="flex justify-between items-center">
                    <span class="font-light text-gray-600 dark:text-gray-400 text-sm">{{ $lesson->date }} , {{ $lesson->time }}</span>
                </div>

                <div class="mt-2">
                    <a href="#" class="text-2xl text-gray-700 dark:text-white font-bold hover:text-gray-600 dark:hover:text-gray-200 hover:underline">{{ $lesson->name }}</a>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Lorem ipsum dolor sit,
                        amet consectetur adipisicing elit. Tempora expedita dicta totam aspernatur doloremque.
                    </p>
                </div>

                <div lesson="mt-2 flex space-x-4">
                    <a href="">
                        <x-primary-button>
                            Lesson Room
                        </x-primary-button>
                    </a>
                    <a href="{{route('update.lesson.view',[$lesson->id,$program->id])}}">
                        <x-success-button>
                            Update
                        </x-success-button>
                    </a>
                    @can('delete',$lesson)
                    <a href="{{route('delete.lesson',$lesson->id)}}">
                        <x-danger-button>
                            Delete
                        </x-danger-button>
                    </a>
                    @endcan
                </div>

            </div>
        </div>
        @endforeach
    </div>

</x-app-layout>
