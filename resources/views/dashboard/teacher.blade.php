<x-app-layout>

        <x-profile-heder />

        <x-dashboard-navigation />
        <x-timeline-navigation />

        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <x-alart />

        <x-enrolment-request />

</x-app-layout>
