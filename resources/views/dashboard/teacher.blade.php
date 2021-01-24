<x-app-layout>

    <a href="{{route('create.program.viwe')}}" class="p-10">create class</a>

    <a href="{{route('program.view.teacher')}}" class="p-10">All classes</a>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <x-enrolment-request />

    <x-enrolled-student />

</x-app-layout>
