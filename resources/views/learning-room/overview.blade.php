<x-learning-room :lesson="$lesson">

    <div class="h-100 w-full flex items-center justify-center bg-Purple-lightest font-sans">
        <div class="bg-indigo-100 rounded shadow p-6 m-4 w-full lg:w-4/4 lg:max-w-lg">
            <div class="mb-4">
                <h1 class="text-grey-darkest text-center lg:text-4xl md:text-3xl sm:text-xl"> {{$lesson->program->subject->name}}</h1>
                <div class="flex mt-4 text-grey-darkest text-center lg:text-3xl md:text-3xl sm:text-xl">
                    {{$lesson->name}}
                </div>
            </div>
            <div>
                <div class="flex mb-4 items-center">
                    {{$lesson->program->teacher->name}}
                </div>
            </div>
        </div>
    </div>

    <div>
        <span>All Students: </span>
        {{$enrolments->count()}}
    </div>

    <div class="dark:bg-gray-900 py-6 flex flex-col justify-center sm:py-12">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 px-4">
            @forelse ($enrolments as $enrolment)
            <x-all-students :enrolment="$enrolment" />
            @empty
            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                <span class="block sm:inline text-yellow-700">There are no students in your class yet</span>
            </div>
            @endforelse
        </div>
    </div>

</x-learning-room>
