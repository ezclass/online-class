<x-app-layout>

    <p>
        program Name : {{$program->name}}
    </p>
    Subject Name : {{$program->subject->name}}

    @can('createLesson', $program)
    <x-create-lesson :program="$program" />
    @endcan

    @foreach($lessons as $lesson)
    <x-lesson-card :lesson="$lesson" />
    @endforeach

</x-app-layout>
