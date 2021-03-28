<div class="flex flex-wrap -m-2">
    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
            <div class="flex-grow">
                <h2 class="text-gray-900 title-font font-medium">{{$enrolment->student->name}}</h2>
                <p class="text-gray-500">{{$enrolment->student->email}}</p>
            </div>
        </div>
    </div>
</div>
