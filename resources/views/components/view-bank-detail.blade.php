<div class="mt-5 max-w-4xl p-6 mx-auto bg-gray-200 dark:bg-gray-800 rounded-md shadow-md">
    <div>
        <span>Account Name :</span> <span class="text-indigo-500">{{Auth::user()->account_name}}</span>
        <div>
            <span>Account Number :</span> <span class="text-indigo-500">{{Auth::user()->account_number}}</span>
        </div>
        <div>
            <span>Bank Name :</span> <span class="text-indigo-500">{{Auth::user()->bank_name}}</span>
        </div>
        <div>
            <span>Branch :</span> <span class="text-indigo-500">{{Auth::user()->branch}}</span>
        </div>
    </div>

    <form action="{{route('bank.detail.delete', Auth::user())}}" method="POST" class="mt-9">
        @csrf
        <x-danger-button>
            {{__('Delete')}}
        </x-danger-button>
    </form>
</div>
