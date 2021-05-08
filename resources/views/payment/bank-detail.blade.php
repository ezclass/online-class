<x-app-layout>

    <x-profile-heder />

    <x-dashboard-navigation />

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    @forelse ($bankDetails as $bankDetail)
    <x-view-bank-detail :bankDetail="$bankDetail" />
    @empty
    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
        <span class="block sm:inline"> You have not yet added bank details </span>
    </div>
    <x-save-bank-detail />
    @endforelse

</x-app-layout>
