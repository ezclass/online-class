<x-app-layout>

    <x-alart />
    
    @foreach($programs as $program)
    <x-teacher-program-card :program="$program" />
    @endforeach

</x-app-layout>
