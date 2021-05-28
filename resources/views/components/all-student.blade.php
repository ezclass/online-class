<div class="bg-gray-100 border-indigo-600 dark:bg-gray-800 bg-opacity-95 border-opacity-60 | p-4 border-solid rounded-3xl border-2 | justify-around cursor-pointer | hover:bg-indigo-400 dark:hover:bg-indigo-600 hover:border-transparent | transition-colors duration-500">
    <img class="inline-block h-14 w-14 rounded-full ring-2 ring-white" src="{{Storage::disk('do')->url('avatar/'.$enrolment->student->avatar)}}" alt="" />
    <div class="flex flex-col justify-center">
        <p class="text-gray-900 dark:text-gray-300 font-semibold">{{$enrolment->student->name}}</p>
        @role('teacher')
        <p class="text-black dark:text-gray-100 text-justify font-semibold">{{$enrolment->student->email}}</p>
        @endrole
    </div>
</div>
