<x-app-layout>
    <div class="mt-10 ml-5">
        {{$lesson->program->subject->name}} <br>
        {{$lesson->name}} <br>
        {{$lesson->program->teacher->name}}
    </div>


<nav class="mt-10 ml-5">
    <ul>
        <li> <a href="">Nots</a></li>
        <li> <a href="">Paper</a></li>
        <li> <a href="">Vodeo</a></li>
    </ul>
</nav>
</x-app-layout>
