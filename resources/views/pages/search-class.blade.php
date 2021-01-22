<x-app-layout>
    
    <x-search-class-form :selected-grade-id="$selectedGradeId" :selected-subject-id="$selectedSubjectId"  />

    <div class="container mx-auto pt-16">
        <div class="lg:flex md:flex xl:justify-around sm:flex flex-wrap md:justify-around sm:justify-around lg:justify-around">
            @foreach($programs as $program)
                <x-program-card :program="$program"/>
            @endforeach
        </div>
    </div>

    {{ $programs->links() }}

    <x-footer>
    </x-footer>

</x-app-layout>
