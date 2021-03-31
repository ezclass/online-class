<div class="mt-4 bg-white w-full flex items-center p-2 rounded-xl shadow border">
    <div class="flex items-center space-x-4">
        <img src="{{ asset('storage/avatar/'. $enrolment->student->avatar )}}" alt="My profile" class="w-16 h-16 rounded-full">
    </div>
    <div class="flex-grow p-3">
        <div class="font-semibold text-gray-700">
            {{$enrolment->student->name}}
        </div>
        <div class="text-sm text-gray-500">
            You: Thanks, sounds good! . 8hr
        </div>
    </div>
    <div class="flex-grow p-3">
        Date of class enroled : {{$enrolment->accepted_at->format('M d,Y')}}
    </div>
    <div class="p-2">
        <div>
            <a href="">Block</a>
        </div>
    </div>
</div>
