<x-app-layout>

    <x-profile-heder />
    <x-dashboard-navigation />

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-auth-page>
    <x-create-program />
    </x-auth-page>
</x-app-layout>
