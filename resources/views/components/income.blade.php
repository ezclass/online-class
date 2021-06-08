<div class="items-center">
    <div class='shadow rounded-md bg-blue-100 w-full  h-64'>
        <div class=' items-center px-5 py-3'>
            <div class='mx-3'>
                <div class="mt-6 text-xl">Total Amount = Rs.{{ $payments->sum('amount') }}</div>
                <div class="mt-2 text-xl">Amount charged (Total - 10%) = {{ ($payments->sum('amount') / 100) * 10 }}</div>
                <div class="mt-2 text-xl">Payhere charged (3.9%) = {{ ($payments->sum('amount') / 100) * 3.9 }}</div>
                <div class="mt-2 text-xl">
                    Total Income =
                    <span class="text-yellow-500">
                        Rs.{{ ($payments->sum('amount') / 100) * 6.1 }}//
                    </span>
                </div>
            </div>
        </div>
        <hr />
    </div>
</div>

