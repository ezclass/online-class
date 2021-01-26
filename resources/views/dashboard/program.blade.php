<x-app-layout>

    @foreach($programs as $program)
    <x-teacher-program-card :program="$program" />
    @endforeach

</x-app-layout>
