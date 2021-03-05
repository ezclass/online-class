<x-app-layout>

    <x-profile-heder />

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <div class="container mx-auto pt-10 pb-10">
        <div class="lg:flex md:flex xl:justify-around sm:flex flex-wrap md:justify-around sm:justify-around lg:justify-around">
            <x-student-program-card />
        </div>
    </div>

</x-app-layout>
