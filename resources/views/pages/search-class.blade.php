<x-app-layout>

    <x-search-class-form :selected-grade-id="$selectedGradeId" :selected-subject-id="$selectedSubjectId" />

    <x-alart />
    
    <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
        @foreach($programs as $program)
        <x-program-card :program="$program" />
        @endforeach
    </div>

    <div class="mt-10 mb-10">
        {{ $programs->links() }}
    </div>

</x-app-layout>
