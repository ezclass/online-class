<x-learning-room :lesson="$lesson">

    {{$lesson->program->subject->name}} <br>
    {{$lesson->name}} <br>
    {{$lesson->program->teacher->name}}

</x-learning-room>
