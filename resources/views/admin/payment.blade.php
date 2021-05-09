<x-admin>
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <div class="grid lg:grid-cols-2 gap-4">
        <x-payment :teacher="$teacher" />
    </div>

    <div class="m-6">
        <h3 class="mt-6 text-xl">Total = Rs.{{$subscriptions->sum('amount')}}</h3>
        <h3 class="mt-6 text-xl">Amount charged (Total - 6.1%) = {{$subscriptions->sum('amount')}} - {{$subscriptions->sum('amount') / 100 * 6.1}}</h3>
        <h3 class="mt-6 text-xl text-green-400">Total amount to be paid = <span class="text-yellow-500">Rs.{{$subscriptions->sum('amount') - $subscriptions->sum('amount') / 100 * 6.1}}</span></h3>
    </div>


    <h3 class="mt-6 text-xl">All Payers : {{$subscriptions->count()}}</h3>

    <x-all-program-detail :programs="$programs" />

    <x-teacher-pay :subscriptions="$subscriptions" />

</x-admin>
