<x-admin>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <div class="grid lg:grid-cols-2 gap-4">
        <x-payment :teacher="$teacher" />
    </div>

    <div class="m-6 mt-4">
        <div class="mt-6 text-xl">Total = Rs.{{ $payments->sum('amount') + $homepayments->sum('amount')}}</div>
        <div class="mt-2 text-xl text-green-400">
            Total amount to be paid =
            <span class="text-yellow-500">
                Rs.{{ $payments->sum('amount') / 100 * 90 + $homepayments->sum('amount') / 100 * 70}} //
            </span>
        </div>
    </div>

    Reference Student
    <div class="m-6 mt-4">
        <div class="mt-6 text-xl">Total = Rs.{{ $payments->sum('amount') }}</div>
        <div class="mt-2 text-xl">Amount Charged (10%) = {{$payments->sum('amount') /100 * 10}}</div>
        <div class="mt-2 text-xl">Amount Paid (Total - 10%) = {{ $payments->sum('amount') }} - {{$payments->sum('amount') /100 * 10}}</div>
        <div class="mt-2 text-xl text-green-400">
            Total amount to be paid =
            <span class="text-yellow-500">
                Rs.{{ $payments->sum('amount') / 100 * 90 }} //
            </span>
        </div>
    </div>

    Home Class Student
    <div class="m-6 mt-4">
        <div class="mt-6 text-xl">Total = Rs.{{ $homepayments->sum('amount') }}</div>
        <div class="mt-2 text-xl">Amount Charged (30%) = {{$homepayments->sum('amount') /100 * 30}}</div>
        <div class="mt-2 text-xl">Amount Paid (Total - 30%) = {{ $homepayments->sum('amount') }} - {{$homepayments->sum('amount') /100 * 30}}</div>
        <div class="mt-2 text-xl text-green-400">
            Total amount to be paid =
            <span class="text-yellow-500">
                Rs.{{ $homepayments->sum('amount') / 100 * 70 }} //
            </span>
        </div>
    </div>

    <hr>

    <div class="mt-6 text-xl">All payers for this month : {{ $payments->count('id') }}</div>
    <div class="mt-2 text-xl">All Clases : {{ $programs->count() }}</div>

    @role('super_admin')
    <x-paid-form :teacher="$teacher" :homepayments="$homepayments" :payments="$payments" />
    @endrole
    <x-all-program-detail :programs="$programs" />
    <x-paid-fetch :paids="$paids" />

</x-admin>
