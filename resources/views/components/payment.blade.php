<div class="items-center">
    <div class='shadow rounded-md bg-blue-100 w-full max-w-lg'>
        <div class='flex items-center px-5 py-3'>
            <img src="{{ Storage::disk('do')->url('avatar/' . $teacher->avatar) }}" alt="avatar"
                class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
            <div class='mx-3'>
                <a href="{{ route('public.dashboard', $teacher) }}"
                    class="text-gray-600 text-xl">{{ $teacher->name }}</a>
                <p>{{ $teacher->email }}</p>
                <p>{{ $teacher->phone_number }}</p>
            </div>
        </div>
        <hr />
        <div class='px-5 py-3'>
            <h3 class="font-bold text-xl">Bank Details</h3>
            <div class="">
                Name of the owner : <span
                    class="m-1 hover:bg-gray-300 rounded-full px-2 font-bold text-sm leading-loose cursor-pointer">{{ $teacher->account_name }}</span>
                <br>
                Bank Name : <span
                    class="m-1 hover:bg-gray-300 rounded-full px-2 font-bold text-sm leading-loose cursor-pointer">{{ $teacher->bank_name }}</span>
                <br>
                Account Number : <span
                    class="m-1 hover:bg-gray-300 rounded-full px-2 font-bold text-sm leading-loose cursor-pointer">{{ $teacher->account_number }}</span>
                <br>
                Branch : <span
                    class="m-1 hover:bg-gray-300 rounded-full px-2 font-bold text-sm leading-loose cursor-pointer">{{ $teacher->branch }}</span>
                <br>
            </div>
        </div>
        <div class='px-5 py-3'>
            <h3 class="font-bold text-xl">Verify Details</h3>
            <div class="">
                Date of Birth: <span
                    class="m-1 hover:bg-gray-300 rounded-full px-2 font-bold text-sm leading-loose cursor-pointer">{{ $teacher->verify->dob }}</span>
                <br>
                School: <span
                    class="m-1 hover:bg-gray-300 rounded-full px-2 font-bold text-sm leading-loose cursor-pointer">{{ $teacher->verify->school }}</span>
                <br>
                province : <span
                    class="m-1 hover:bg-gray-300 rounded-full px-2 font-bold text-sm leading-loose cursor-pointer">{{ $teacher->verify->province }}</span>
                <br>
                district : <span
                    class="m-1 hover:bg-gray-300 rounded-full px-2 font-bold text-sm leading-loose cursor-pointer">{{ $teacher->verify->district }}</span>
                <br>
                facebook : <span
                    class="m-1 hover:bg-gray-300 rounded-full px-2 font-bold text-sm leading-loose cursor-pointer"><a href="{{ $teacher->verify->facebook }}" target="new">facebook </a></span>
                <br>
            </div>
        </div>
    </div>
</div>
