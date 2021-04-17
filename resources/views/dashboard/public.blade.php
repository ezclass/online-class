<x-app-layout>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />
    
    <x-public :teacher="$teacher" :programs="$programs"/>

</x-app-layout>
