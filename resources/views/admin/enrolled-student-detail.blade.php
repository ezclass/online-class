<x-admin>
    <div class="text-center mt-6 text-xl">
        All Students in : <b>{{$program->subject->name}} Class</b>
    </div>
    <div class="justify-center mt-6">
        <a href="{{route('teacher.pay', $program->teacher)}}">
            <x-warning-button type="button">
                {{__('Go Back')}}
            </x-warning-button>
        </a>
    </div>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <x-enrolled-student-detail :enrolments="$enrolments" />
</x-admin>
