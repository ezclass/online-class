<x-admin>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <x-payment-navigation />
    <x-pending-bank-payment :banks="$banks" />
</x-admin>
