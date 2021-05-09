<div class="items-center">
    <div class='shadow rounded-md bg-blue-100 w-full max-w-lg h-60'>
        <div class='flex items-center px-5 py-3'>
            <img src="{{ Storage::disk('do')->url('avatar/'. $teacher->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
            <div class='mx-3'>
                <p class='text-gray-600'>{{$teacher->name}} / {{$teacher->email}}</p>
            </div>
        </div>
        <hr />
        <div class='px-5 py-3'>
            <h3 class="font-bold text-xs">Details</h3>
            <div class="">
                Name of the owner : <span class="m-1 hover:bg-gray-300 rounded-full px-2 font-bold text-sm leading-loose cursor-pointer">{{$teacher->account_name}}</span> <br>
                Bank Name : <span class="m-1 hover:bg-gray-300 rounded-full px-2 font-bold text-sm leading-loose cursor-pointer">{{$teacher->bank_name}}</span> <br>
                Account Number : <span class="m-1 hover:bg-gray-300 rounded-full px-2 font-bold text-sm leading-loose cursor-pointer">{{$teacher->account_number}}</span> <br>
                Branch : <span class="m-1 hover:bg-gray-300 rounded-full px-2 font-bold text-sm leading-loose cursor-pointer">{{$teacher->branch}}</span> <br>
            </div>
        </div>
    </div>
</div>
