<x-app-layout>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="container mx-auto pt-10 pb-10">
        <div class="lg:flex md:flex xl:justify-around sm:flex flex-wrap md:justify-around sm:justify-around lg:justify-around">
            @foreach($enrolments as $enrolment)
                <x-student-program-card :enrolment="$enrolment" />
            @endforeach
        </div>
    </div>

</x-app-layout>
