<div class="mt-5 max-w-4xl p-6 mx-auto bg-gray-200 dark:bg-gray-800 rounded-md shadow-md">

    <form action="{{route('create.program')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class=" grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
            <div>
                <x-label for="name">Your Class Name</x-label>
                <input type="text" name="name" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
            </div>

            <div>
                <x-label for="grade_id">Select Grade/Year:</x-label>
                <select name="grade_id" id="grade_id" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                    <option selected disabled>Grade/Year</option>
                    @foreach($grades as $grade)
                    <option value="{{$grade->id}}">{{$grade->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
            <div>
                <x-label for="language_id">Select Meadiam</x-label>
                <select id="language_id" name="language_id" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                    <option selected disabled>Meadiam</option>
                    @foreach($languages as $language)
                    <option value="{{$language->id}}">{{$language->name}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <x-label for="subject_id">Select Subject</x-label>
                <select id="subject_id" name="subject_id" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                    <option selected disabled>Subject</option>
                    @foreach($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
            <div>
                <x-label for="fees">Class fees for the month</x-label>
                <input type="number" name="fees" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
            </div>

            <div>
                <x-label for="image">Class Image</x-label>
                <input type="file" name="image" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
            </div>
        </div>

        <div class="justify-center mt-6">
            <x-success-button class="ml-3 mt-5">
                {{ __('Create') }}
            </x-success-button>
        </div>
    </form>
</div>
