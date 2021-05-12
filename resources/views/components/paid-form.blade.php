<div class="mt-5 max-w-4xl p-6 mx-auto bg-indigo-200 dark:bg-gray-800 rounded-md shadow-md">
    <form action="{{route('paid.save')}}" method="POST">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
            <input type="hidden" name="user_id" value="{{$teacher->id}}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Your Class Name" required>
            <div>
                <x-label for="">Amount <span class="text-red-500">*</span></x-label>
                <input type="text" name="amount" value="{{$payments->sum('amount') - $payments->sum('amount') / 100 * 6.1}}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Your Class Name" required>
            </div>
            <div>
                <x-label for="">Summary <span class="text-red-500">*</span> </x-label>
                <textarea name="summary" id="summary" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Lesson Description" required></textarea>
            </div>
        </div>
        <x-success-button class="mt-3 ml-3">
            {{ __('Paid') }}
        </x-success-button>
    </form>
</div>
