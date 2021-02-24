<x-app-layout>

    <p>
        program Name : {{$program->name}}
    </p>
    Subject Name : {{$program->subject->name}}

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    @can('create', $program)
    <x-create-lesson :program="$program" />
    @endcan

    @foreach($lessons as $lesson)
    <x-lesson-card :lesson="$lesson" />
    @endforeach

</x-app-layout>
