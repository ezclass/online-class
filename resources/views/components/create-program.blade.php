<form action="{{route('create.program')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="name" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Your Class Name</label>
        <x-input type="text" name="name" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required />
    </div>

    <div class="mt-4">
        <label for="grade" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Select Grade/Year:</label>
        <select name="grade" id="grade" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            <option selected disabled>Grade/Year</option>
            @foreach($grades as $grade)
            <option value="{{$grade->getRouteKey()}}">{{$grade->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mt-4">
        <label for="medium" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Select Medium</label>
        <select id="medium" name="medium" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            <option selected disabled>Medium</option>
            @foreach($languages as $language)
            <option value="{{$language->getRouteKey()}}">{{$language->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mt-4">
        <label for="subject" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Select Subject</label>
        <select id="subject" name="subject" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            <option selected disabled>Subject</option>
            @foreach($subjects as $subject)
            <option value="{{$subject->getRouteKey()}}">{{$subject->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mt-4">
        <label for="fees" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Class fees for the month</label>
        <input type="number" name="fees" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
    </div>

    <div class="mt-4">
        <label for="image" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Class Image</label>
        <input type="file" name="image" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
    </div>


    <div class="justify-center mt-6">
        <x-success-button class="ml-3 mt-5">
            {{ __('Create') }}
        </x-success-button>
    </div>
</form>
