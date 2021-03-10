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

</x-learning-room>
