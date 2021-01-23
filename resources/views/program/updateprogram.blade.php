<x-app-layout>

    <div class="mt-5 max-w-4xl p-6 mx-auto bg-gray-200 dark:bg-gray-800 rounded-md shadow-md">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form action="{{route('update.program',$program->getRouteKey())}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <div>
                    <x-label for="name">Your Class Name</x-label>
                    <input type="text" name="name" value="{{$program->name}}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                </div>

                <div>
                    <x-label for="grade_id">Select Grade/Year:</x-label>
                    <select name="grade_id" id="grade_id" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                        <option selected value="{{$program->grade_id}}">{{$program->grade->name}}</option>
                        @foreach($grade as $grd)
                        <option value="{{$grd->id}}">{{$grd->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <div>
                    <x-label for="language_id">Select Meadiam</x-label>
                    <select id="language_id" name="language_id" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                        <option selected value="{{$program->language_id}}">{{$program->language->name}}</option>
                        @foreach($language as $med)
                        <option value="{{$med->id}}">{{$med->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <x-label for="subject_id">Select Subject</x-label>
                    <select id="subject_id" name="subject_id" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                        <option selected value="{{$program->subject_id}}">{{$program->subject->name}}</option>
                        @foreach($subject as $sub)
                        <option value="{{$sub->id}}">{{$sub->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <div>
                    <x-label for="fees">Class fees for the month</x-label>
                    <input type="number" name="fees" value="{{$program->fees}}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                </div>

                <div>
                    <x-label for="image">Class Image</x-label>
                    <input type="file" name="image" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500">
                </div>
            </div>

            <div class="justify-center mt-6">
                <x-success-button class="ml-3 mt-5">
                    {{ __('Update') }}
                </x-success-button>
            </div>
        </form>
    </div>
</x-app-layout>
