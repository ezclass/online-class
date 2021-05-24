<form action="{{ route('mcq.save', $lesson) }}" method="POST">
    @csrf
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
        <div class="mt-4">
            <label for="link" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Google Form Link <span class="text-red-500">*</span></label>
            <input type="text" name="link" id="link" :value="old('link')" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <div class="mt-4">
            <label for="description" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Description<span class="text-red-500">*</span></label>
            <input type="text" name="description" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <div class="mt-4">
            <label for="submission " class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Submission Date and Time<span class="text-red-500">*</span></label>
            <input type="datetime-local" name="submission" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>
    </div>

    <div class="justify-center mt-6">
        <x-success-button class="ml-3 mt-5">
            {{ __('Save') }}
        </x-success-button>
    </div>
</form>
