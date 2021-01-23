<div class="mt-10 pt-8 pb-8 bg-yellow-100">
    <div class="px-4  max-w-3xl mx-auto space-y-6">

        <form action="{{route('create.class')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex space-x-4">
                <div class="w-1/2">
                    <x-label for="">Your Class Name</x-label>
                    <input type="text" name="name" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Your Class Name" required>
                </div>
                <div class="w-1/2">
                    <x-label for="">Select Grade/Year:</x-label>
                    <select class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" id="grade_id" name="grade_id" onchange="random_function3()" required>
                        <option selected disabled>Grade/Year</option>
                        @foreach($grades as $grade)
                        <option value="{{$grade->id}}">{{$grade->name}}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="flex space-x-4">
                <div class="w-1/2 relative">
                    <x-label for="">Select Meadiam</x-label>
                    <select class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" id="language_id" name="language_id" onchange="random_function()" required>
                        <option selected disabled>Meadiam</option>
                        @foreach($languages as $language)
                        <option value="{{$language->id}}">{{$language->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="w-1/2">
                    <x-label for="">Select Subject</x-label>
                    <select id="subject_id" name="subject_id" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                        <option selected disabled>Subject</option>
                        @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex space-x-4">
                <div class="w-1/2">
                    <x-label class="">Class fees for the month</x-label>
                    <input type="number" name="fees" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500 @error('fees') is-invalid @enderror">
                </div>

                <div class="w-1/2">
                    <x-label class="">Class Image</x-label>
                    <input type="file" name="image" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500 @error('class_image') is-invalid @enderror">
                </div>
            </div>

            <x-success-button class="ml-3 mt-5">
                {{ __('Create') }}
            </x-success-button>

        </form>
        
    </div>
</div>
