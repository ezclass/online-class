<x-app-layout>

    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <x-header />

    @guest
    <x-embed-styles />
    <x-embed url="https://youtu.be/G8qX2u2Kr2c" />

    <x-explain />
    <x-service />
    @endguest

    <x-home-3 />

    <x-client-opinion />

    <x-messanger />

</x-app-layout>
