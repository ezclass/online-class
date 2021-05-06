<div class="mt-5 max-w-4xl p-6 mx-auto bg-indigo-200 dark:bg-gray-800 rounded-md shadow-md">
    <div class="text-lg">
        Create Lesson
    </div>
    <form action="{{route('create.lesson',$program->getRouteKey())}}" method="POST">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
            <div>
                <x-label for="">Your Lesson Name <span class="text-red-500">*</span></x-label>
                <input type="text" name="name" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Your Class Name" required>
            </div>

            <div>
                <x-label for="">Class Date <span class="text-red-500">*</span></x-label>
                <input type="date" name="class_date" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="date" required>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
            <div>
                <x-label for="">Description</x-label>
                <textarea name="description" id="description" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Lesson Description"></textarea>
            </div>
        </div>

        <x-success-button class="mt-3 ml-3">
            {{ __('Create') }}
        </x-success-button>
    </form>
</div>
