<div class="mt-6 bg-white xl:mx-60">
    <div class="text-center pt-2">
        <span class="font-black text-sm  text-gray-400 mb-10">
            Guess the questions students ask you and add those questions and their answers to the form below.
        </span>
    </div>
    <form action="{{ route('save.addition', $program) }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-1 gap-6 mt-4 m-6">
            <div class="mt-4">
                <label for="question" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Question
                    <span class="text-red-500">*</span></label>
                <input type="text" name="question" id="question" :value="old('question')"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
            </div>

            <div class="mt-4">
                <label for="answer" class="block text-gray-600 dark:text-gray-200 text-sm font-medium mb-2">Answer
                    <span class="text-red-500">*</span></label>
                <textarea name="answer" id="answer" cols="30" rows="5"
                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required> </textarea>
            </div>
        </div>

        <div class="text-center py-4">
            <button type="submit"
                class=" ml-auto text-white bg-gray-600 border-0 py-2 px-16 focus:outline-none hover:bg-gray-800 rounded">
                Save
            </button>
        </div>
    </form>
</div>
