<x-app-layout>

    <div class="top h-64 w-full overflow-hidden relative">
        <img src="{{ asset('storage/dashboard/banner3.jpg')}}" class="bg w-full h-full object-cover object-center absolute z-0">
        <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
            <img src="{{ asset('storage/avatar/'. $program->teacher->avatar )}}" class="h-24 w-24 object-cover rounded-full">
            <h1 class="text-2xl font-semibold">{{$program->teacher->name}}</h1>
        </div>
    </div>

    <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
        <div class="px-4 pt-4">

            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            @can('create', $program)
            <x-create-lesson :program="$program" />
            @endcan

            <div class="text-xl">
                Lessons
            </div>
            <x-alart />

            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
                @foreach($lessons as $lesson)
                <x-lesson-card :lesson="$lesson" />
                @endforeach
            </div>

        </div>
    </div>

</x-app-layout>
