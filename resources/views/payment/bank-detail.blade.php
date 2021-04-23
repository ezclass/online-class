<x-app-layout>

    <x-profile-heder />

    <x-dashboard-navigation />

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <div>
        <span class="text-red-500 m-6">*</span><span class="text-red-500">Please add your bank details</span>
    </div>


    <x-save-bank-detail />

    @forelse ($bankDetails as $bankDetail)
    <x-view-bank-detail :bankDetail="$bankDetail" />
    @empty
    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
        <span class="block sm:inline"> You have not yet added bank details </span>
    </div>
    @endforelse

</x-app-layout>
