<x-app-layout>

    <x-profile-heder />
    <x-dashboard-navigation />

    <x-alart />

    @foreach($programs as $program)
    <x-teacher-program-card :program="$program" />
    @endforeach

</x-app-layout>
