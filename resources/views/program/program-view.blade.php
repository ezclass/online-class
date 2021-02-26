<x-app-layout>

    <div class="w-full relative mt-4  rounded my-24 overflow-hidden">
        <div class="top h-64 w-full bg-blue-600 overflow-hidden relative">
            <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
            <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
                <img src="{{ asset('storage/avatar/'. $program->teacher->avatar )}}" class="h-24 w-24 object-cover rounded-full">
                <h1 class="text-2xl font-semibold">{{$program->teacher->name}}</h1>
            </div>
        </div>
        <div class="grid grid-cols-12 bg-white ">

            <div class="col-span-12 w-full px-3 py-6 justify-center flex space-x-4 border-b border-solid md:space-x-0 md:space-y-4 md:flex-col md:col-span-2 md:justify-start ">
                <span class="text-sm p-2 bg-indigo-900 text-white text-center rounded font-bold">Lessons</span>
            </div>

            <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
                <div class="px-4 pt-4">

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    @can('create', $program)
                    <x-create-lesson :program="$program" />
                    @endcan

                    <x-alart />
                    
                    @foreach($lessons as $lesson)
                    <x-lesson-card :lesson="$lesson" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
