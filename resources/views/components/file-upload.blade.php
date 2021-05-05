<form action="{{route('file.upload',$lesson)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
        <div class="mt-4">
            <label for="title" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Title <span class="text-red-500">*</span></label>
            <input type="text" name="title" id="title" :value="old('title')" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <div class="mt-4">
            <label for="file" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">File <span class="text-red-500">*</span></label>
            <input type="file" name="file" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
        </div>
    </div>

    <div class="justify-center mt-6">
        <x-success-button class="ml-3 mt-5">
            {{ __('Upload') }}
        </x-success-button>
    </div>
</form>
