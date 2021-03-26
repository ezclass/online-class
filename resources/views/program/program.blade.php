<x-app-layout>
    <div class="bg-blue-100">
        <x-profile-heder />

        <x-dashboard-navigation />

        <x-alart />

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    @forelse($programs as $program)
                    <x-teacher-program-card :program="$program" />
                    @empty
                    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                        <strong class="font-bold">oops!</strong>
                        <span class="block sm:inline text-yellow-700">No classes yet, Click <a href="{{route('create.program.viwe')}}"><u>Create New Class</u></a></span>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>

</x-app-layout>
