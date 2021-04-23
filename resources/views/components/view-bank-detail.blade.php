{{$bankDetail->name}}
{{$bankDetail->account_number}}
{{$bankDetail->branch}}

<form action="{{route('bank.detail.delete', $bankDetail)}}" method="POST">
    @csrf
    <x-danger-button>
        {{__('Delete')}}
    </x-danger-button>
</form>
