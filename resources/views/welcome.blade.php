<x-app-layout>

    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <x-header />

    @guest
    <x-explain />
    <x-service />
    @endguest

    <x-home-3 />

   

    <x-messanger />

</x-app-layout>
