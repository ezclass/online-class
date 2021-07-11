<x-guest-layout>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    @role('teacher')
    <x-teacher-verify />
    @endrole

    @role('student')
    <x-student-verify />
    @endrole

    <x-messanger />
    <x-whatsapp />

</x-guest-layout>
