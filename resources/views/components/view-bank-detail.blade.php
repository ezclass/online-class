<div class="mt-5 max-w-4xl p-6 mx-auto bg-gray-200 dark:bg-gray-800 rounded-md shadow-md">
    <div>
        <span>Name :</span> <span class="text-indigo-500">{{$bankDetail->name}}</span>
        <div>
            <span>Account Number :</span> <span class="text-indigo-500">{{$bankDetail->account_number}}</span>
        </div>
        <div>
            <span>Bank :</span> <span class="text-indigo-500">{{$bankDetail->bank_name}}</span>
        </div>
        <div>
            <span>Branch :</span> <span class="text-indigo-500">{{$bankDetail->branch}}</span>
        </div>
    </div>

    <form action="{{route('bank.detail.delete', $bankDetail)}}" method="POST" class="mt-9">
        @csrf
        <x-danger-button>
            {{__('Delete')}}
        </x-danger-button>
    </form>
</div>
