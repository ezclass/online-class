<x-app-layout>

    <x-profile-heder />

    <x-dashboard-navigation />

    <x-alart />

    <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
        @foreach($programs as $program)
        <x-teacher-program-card :program="$program" />
        @endforeach
    </div>

</x-app-layout>
