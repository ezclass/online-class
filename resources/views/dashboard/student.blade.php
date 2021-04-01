<x-app-layout>

   <x-profile-heder />

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />


    <div class="holder mx-auto w-11/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
        <x-student-program-card />
    </div>

</x-app-layout>
