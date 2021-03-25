<x-app-layout>

    <x-profile-heder />

    <x-dashboard-navigation />

    <x-bg-layout>

        <h1 class="font-black uppercase text-xl text-yellow-500 mb-10">Create Class</h1>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <x-create-program />

    </x-bg-layout>

</x-app-layout>
