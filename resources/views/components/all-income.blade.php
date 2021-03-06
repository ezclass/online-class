<div class="items-center">
    <div class='shadow rounded-md bg-blue-100 w-full  h-64'>
        <div class=' items-center px-5 py-3'>
            All Payment
            <div class='mx-3'>
                <div class="mt-6 text-xl">Total Amount = Rs.{{ $payments->sum('amount') }}</div>
                <div class="mt-2 text-xl">Amount to be paid (Total - 10%) = <span class="text-yellow-500">Rs.{{$payments->sum('amount') - ($payments->sum('amount') / 100 * 10 )}}</span></div>
                <div class="mt-2 text-xl">Amount charged (10%) = <span class="text-green-500">{{ ($payments->sum('amount') / 100 * 10 )}}</span></div>
            </div>
        </div>
        <hr />
    </div>
</div>

