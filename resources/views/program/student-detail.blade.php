<x-app-layout>

    <x-profile-heder />
    <x-dashboard-navigation />

    <div class="text-center mt-6 text-xl">
        All Students in : <b>{{$program->subject->name}} Class</b>
    </div>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <x-student-detail :enrolments="$enrolments" />

</x-app-layout>
