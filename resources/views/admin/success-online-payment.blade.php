<x-admin>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <x-payment-navigation />
    <x-success-online-payment :payments="$payments" />
</x-admin>
