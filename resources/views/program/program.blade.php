<x-app-layout>

    <x-profile-heder />

    <x-dashboard-navigation />

    <x-alart />

    <div class="holder mx-auto w-10/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
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
