<x-admin>

    <div class="grid lg:grid-cols-2 gap-4">
        <x-payment :teacher="$teacher" />
    </div>

    <div class="m-6 mt-4">
        <div class="mt-6 text-xl">Total = Rs.{{$payments->sum('amount')}}</div>
        <div class="mt-2 text-xl">Amount charged (Total - 6.1%) = {{$payments->sum('amount')}} - {{$payments->sum('amount') / 100 * 6.1}}</div>
        <div class="mt-2 text-xl text-green-400">
            Total amount to be paid =
            <span class="text-yellow-500">
                Rs.{{$payments->sum('amount') - $payments->sum('amount') / 100 * 6.1}} //
            </span>
        </div>
    </div>
    <hr>
    <div class="mt-6 text-xl">All payers for this month : {{$payments->count('id')}}</div>
    <div class="mt-2 text-xl">All Clases : {{$programs->count()}}</div>

    <x-paid-form :teacher="$teacher" :payments="$payments"/>

    <x-all-program-detail :programs="$programs" />

</x-admin>
