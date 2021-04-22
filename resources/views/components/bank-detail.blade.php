<div class="mt-5 max-w-4xl p-6 mx-auto bg-indigo-200 dark:bg-gray-800 rounded-md shadow-md">
    <form action="{{route('bank.detail.save')}}" method="POST">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
            <div>
                <x-label for="">Name as mentioned in the bank book <span class="text-red-500">*</span></x-label>
                <input type="text" name="name" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Name as mentioned in the bank book" required>
            </div>

            <div>
                <x-label for="">Account Number <span class="text-red-500">*</span></x-label>
                <input type="number" name="account_number" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Account Number" required>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
            <div>
                <x-label for="branch">Branch <span class="text-red-500">*</span></x-label>
                <input type="text" name="branch" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Branch" required>
            </div>
        </div>

        <x-success-button class="mt-3 ml-3">
            {{ __('Submit') }}
        </x-success-button>
    </form>
</div>

