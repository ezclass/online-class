<x-app-layout>
    <div class="bg-blue-100">
        <x-profile-heder />

        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <x-alart />


        <div class="lg:flex md:flex xl:justify-around sm:flex flex-wrap md:justify-around sm:justify-around lg:justify-around">
            <x-student-program-card />
        </div>
    </div>

</x-app-layout>
