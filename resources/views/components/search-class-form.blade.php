<div class="mt-20 px-4  max-w-3xl mx-auto space-y-6">
    <form action="{{route('search-class')}}" method="GET">
        <div class="flex space-x-4">
            <div class="w-1/2 relative">
                <x-label for="">Select Grade</x-label>
                <select id="grade" name="grade" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500">
                    <option value="">Select Grade</option>
                    @foreach($greads as $gread)
                    <option value="{{$gread->getRouteKey()}}" @if($gread->getRouteKey() == $selectedGreadId) selected @endif>{{$gread->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="w-1/2">
                <x-label for="">Select Subject</x-label>
                <select id="subject" name="subject" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500">
                    <option value="" >Select Subject</option>
                    @foreach($subjects as $subject)
                    <option value="{{$subject->getRouteKey()}}" @if($subject->getRouteKey() == $selectedSubjectId) selected @endif>{{$subject->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <x-success-button class="ml-3 mt-5">
            {{ __('Submit') }}
        </x-success-button>
    </form>
</div>
