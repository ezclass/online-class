<x-app-layout>
    <div class="bg-blue-100">

        <x-profile-heder />

        <x-dashboard-navigation />

        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <x-alart />

        <x-enrolment-request />

    </div>
</x-app-layout>
