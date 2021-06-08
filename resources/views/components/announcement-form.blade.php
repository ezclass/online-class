<div class="flex flex-wrap">
    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        <p class="text-xl pb-6 flex items-center">
            <i class="fas fa-list mr-3"></i> Announcement
        </p>
        <div class="leading-loose">
            <form action="{{ route('save.announcement') }}" method="POST" class="p-10 bg-white rounded shadow-xl">
                @csrf
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="si">Type</label>
                    <select name="type" id="type" class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded">
                        <option selected disabled>Select Type</option>
                        <option value="success">success</option>
                        <option value="primary">primary</option>
                        <option value="warning">warning</option>
                        <option value="danger">danger</option>
                    </select>
                </div>

                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="en">Expressed</label>
                    <textarea name="expressed" id="" rows="5"
                        class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded">
                    </textarea>
                </div>
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Add
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        <p class="text-xl pb-6 flex items-center">
            <i class="fas fa-list mr-3"></i> Expressed
        </p>
        <div class="leading-loose">
            <x-easy-announcement />
        </div>
    </div>
</div>
