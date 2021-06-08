<x-admin>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />
    
    <div class="justify-center mt-6">
        <a href="{{route('teacher.pay', $program->teacher)}}">
            <x-warning-button type="button">
                {{__('Go Back')}}
            </x-warning-button>
        </a>
    </div>

    <x-payer :payments="$payments" />
</x-admin>
