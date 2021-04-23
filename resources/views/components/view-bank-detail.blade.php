<div class="mt-5 mb-32 max-w-4xl p-6 mx-auto bg-gray-200 dark:bg-gray-800 rounded-md shadow-md">
    <div>
        <span>Name :</span> {{$bankDetail->name}}
        <div>
            <span>Account Number :</span>{{$bankDetail->account_number}}
        </div>
        <div>
            <span>Bank :</span> {{$bankDetail->branch}}
        </div>
        <div>
            <span>Branch :</span> {{$bankDetail->branch}}
        </div>
    </div>

    <form action="{{route('bank.detail.delete', $bankDetail)}}" method="POST" class="mt-9">
        @csrf
        <x-danger-button>
            {{__('Delete')}}
        </x-danger-button>
    </form>
</div>
