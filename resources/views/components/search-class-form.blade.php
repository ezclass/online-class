<div class="mt-5 max-w-4xl p-6 mx-auto  dark:bg-gray-800 rounded-md ">
    <form action="{{route('search-class')}}" method="GET">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
            <div>
                <x-label for="">Select Grade</x-label>
                <select id="grade" name="grade" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500">
                    <option value="">Select Grade</option>
                    @foreach($grades as $grade)
                    <option value="{{$grade->getRouteKey()}}" @if($grade->getRouteKey() == $selectedGradeId) selected @endif>{{$grade->name}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <x-label for="">Select Subject</x-label>
                <select id="subject" name="subject" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500">
                    <option value="">Select Subject</option>
                    @foreach($subjects as $subject)
                    <option value="{{$subject->getRouteKey()}}" @if($subject->getRouteKey() == $selectedSubjectId) selected @endif>{{$subject->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="justify-center mt-6">
            <x-success-button class="ml-3 mt-5">
                {{ __('Submit') }}
            </x-success-button>
        </div>
    </form>
</div>
