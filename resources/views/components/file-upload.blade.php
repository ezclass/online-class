<div class="bg-white xl:mx-60">
    <div class="text-center pt-2">
        <span class="font-black text-md  text-gray-500 mb-10">Upload files</span>
        <span class="font-black text-sm  text-gray-400 mb-10">( png, jpg, jpeg, pdf, docx, ppt, mkv, mp4, zip, txt ) Up to 50MB</span>
    </div>
    <form action="{{route('file.upload',$lesson)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-1 gap-6 mt-4 m-6">
            <div class="mt-4">
                <label for="title" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Title <span class="text-red-500">*</span></label>
                <input type="text" name="title" id="title" :value="old('title')" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>

            <div class="mt-4">
                <label for="file" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">File <span class="text-red-500">*</span></label>
                <input type="file" name="file" class="border border-gray-400 block py-2 px-4 w-full rounded focus:border-indigo-300" required>
            </div>
        </div>

        <div class="text-center py-4">
            <x-success-button>
                {{ __('Upload') }}
            </x-success-button>
        </div>
    </form>
</div>
