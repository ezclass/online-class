<x-app-layout>

    <x-profile-heder />

    <x-dashboard-navigation />

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    @if (Auth::user()->account_name == null)
    <div class="text-center bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
        <span class="block sm:inline"> You have not yet added bank details <br>
        </span>
    </div>
    <div class="text-center">
        <span class="text-red-500">* We will credit you for the bank accounts you provide, so please provide accurate information</span>
    </div>

    <x-save-bank-detail />

    @else
    <x-view-bank-detail />
    @endif

</x-app-layout>
