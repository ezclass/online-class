<x-app-layout>

    <x-bg-layout>
        <h1 class="font-black uppercase text-3xl lg:text-5xl text-yellow-500 mb-10">Update Class</h1>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form action="{{route('update.program',$program->getRouteKey())}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mt-4">
                <x-label for="grade_id">Select Grade/Year:</x-label>
                <select name="grade_id" id="grade_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option selected value="{{$program->grade_id}}">{{$program->grade->name}}</option>
                    @foreach($grade as $grd)
                    <option value="{{$grd->id}}">{{$grd->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <x-label for="language_id">Select Meadiam</x-label>
                <select id="language_id" name="language_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option selected value="{{$program->language_id}}">{{$program->language->name}}</option>
                    @foreach($language as $med)
                    <option value="{{$med->id}}">{{$med->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <x-label for="subject_id">Select Subject</x-label>
                <select id="subject_id" name="subject_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option selected value="{{$program->subject_id}}">{{$program->subject->name}}</option>
                    @foreach($subject as $sub)
                    <option value="{{$sub->id}}">{{$sub->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <x-label for="fees">Class fees for the month</x-label>
                <x-input type="number" name="fees" value="{{$program->fees}}" class="block mt-1 w-full" required />
            </div>


            <div class="mt-4">
                <label for="start_date" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">class start date</label>
                <input type="date" value="{{$program->start_date}}" name="start_date" id="start_date" :value="old('start_date')" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>

            <div class="mt-4">
                <label for="end_date" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">class end date</label>
                <input type="date" value="{{$program->end_date}}" name="end_date" id="end_date" :value="old('end_date')" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>

            <div class="mt-4">
                <label for="day" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">class Day</label>
                <select id="day" name="day" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option selected value="{{$program->day}}">{{$program->day}}</option>
                    <option value="monday">Monday</option>
                    <option value="tuesday">Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>
                    <option value="friday">Friday</option>
                    <option value="saturday">Saturday</option>
                    <option value="wednesday">Sunday</option>
                </select>
            </div>

            <div class="mt-4">
                <label for="recurrence" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Recurrence</label>
                <select id="recurrence" name="recurrence" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option selected {{$program->recurrence}}>{{$program->recurrence}}</option>
                    <option value="daily">daily</option>
                    <option value="weekly">weekly</option>
                    <option value="monthly">monthly</option>
                </select>
            </div>

            <div class="mt-4">
                <x-label for="image">Class Image</x-label>
                <input type="file" name="image" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500">
            </div>

            <div class="justify-center mt-6">
                <x-success-button class="ml-3 mt-5">
                    {{ __('Update') }}
                </x-success-button>
            </div>
        </form>

    </x-bg-layout>
</x-app-layout>
