<x-app-layout>

    <x-profile-heder />

    <x-dashboard-navigation />

    <x-alart />

    <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
        @forelse($programs as $program)
        <x-teacher-program-card :program="$program" />
        @empty
        <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
            <strong class="font-bold">oops!</strong>
            <span class="block sm:inline text-yellow-700">No classes yet, Click <a href="{{route('create.program.viwe')}}"><u>Create New Class</u></a></span>
        </div>
        @endforelse
    </div>

</x-app-layout>
