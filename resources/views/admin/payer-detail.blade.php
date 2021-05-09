<x-admin>

    <div class="justify-center mt-6">
        <a href="{{route('teacher.pay', $program->teacher)}}">
            <x-warning-button type="button">
                {{__('Go Back')}}
            </x-warning-button>
        </a>
    </div>

    <x-payer :subscriptions="$subscriptions" />
</x-admin>
