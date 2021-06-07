<div class="mt-6 bg-white xl:mx-60">
    <div class="text-center pt-2">
        <span class="font-black text-sm  text-gray-400 mb-10">
            Copy the link to the video you uploaded to YouTube and paste it into the Youtube Video Link text box below.
        </span>
    </div>
    <form action="{{ route('youtube.link.save', $lesson) }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-1 gap-6 mt-4 m-6">
            <div class="mt-4">
                <label for="title" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Title <span
                        class="text-red-500">*</span></label>
                <input type="text" name="title" id="title" :value="old('title')"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
            </div>

            <div class="mt-4">
                <label for="link" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Youtube Video
                    Link
                    <span class="text-red-500">*</span></label>
                <input type="text" name="youtube"
                    class="border border-gray-400 block py-2 px-4 w-full rounded focus:border-indigo-300" required>
            </div>
        </div>

        <div class="text-center py-4">
            <x-success-button>
                {{ __('Save') }}
            </x-success-button>
        </div>
    </form>
</div>
