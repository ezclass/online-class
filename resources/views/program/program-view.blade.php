<x-app-layout>
    <div class="top h-64 w-full overflow-hidden relative">
        <img src="{{ Storage::disk('do')->url('dashboard/dashboard.jpg')}}" class="bg w-full h-full object-cover object-center absolute z-0">
        <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
            <img src="{{ Storage::disk('do')->url('avatar/'. $program->teacher->avatar)}}" class="h-24 w-24 object-cover rounded-full">
            <h1 class="text-2xl font-semibold">{{$program->teacher->name}}</h1>
        </div>
    </div>

    <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
        <div class="px-4 pt-4">

            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <x-alart />

            @can('create', $program)
            <x-create-lesson :program="$program" />
            @endcan

            <div class="text-xl mt-8 m-10">
                Lessons
            </div>

            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
                @forelse($lessons as $lesson)
                <x-lesson-card :lesson="$lesson" />
                @empty
                <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                    <span class="block sm:inline">No lessons yet, create a new lesson</u></a></span>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
