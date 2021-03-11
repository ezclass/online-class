<x-app-layout>

    <x-profile-heder />

    <x-dashboard-navigation />

    <x-auth-page>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <x-create-program />

    </x-auth-page>

</x-app-layout>
