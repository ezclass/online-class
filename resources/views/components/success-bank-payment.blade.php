<body class="antialiased font-sans bg-gray-400">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Payment Date
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Payer
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Payable
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Paid Date
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Receipt
                                </th>
                              
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Delete
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($banks as $bank)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$bank->created_at->isoFormat('MMM Do Y, h:mm a')}}
                                    </p>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <div class="flex items-center">
                                        <a href="{{ Storage::disk('do')->url('avatar/' . $bank->payment->payer->avatar) }}" target="new" class="flex-shrink-0 w-10 h-10">
                                            <img class="w-10 h-10 rounded-full" src="{{ Storage::disk('do')->url('avatar/' . $bank->payment->payer->avatar) }}" alt="" />
                                        </a>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $bank->payment->payer->name }}</div>
                                            <div class="text-sm text-gray-900">{{ $bank->payment->payer->phone_number }}</div>
                                            <div class="text-sm text-gray-900">{{ $bank->payment->payer->email }}</div>
                                            <hr>
                                            <div class="text-sm text-gray-900">Address: {{ $bank->address }}</div>
                                            <div class="text-sm text-gray-900">City: {{ $bank->city }}</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <div class="flex items-center">
                                        <a href="{{ Storage::disk('do')->url('avatar/' . $bank->payment->payable->teacher->avatar) }}" target="new" class="flex-shrink-0 w-10 h-10">
                                            <img class="w-10 h-10 rounded-full" src="{{ Storage::disk('do')->url('avatar/' . $bank->payment->payable->teacher->avatar) }}" alt="avatar" />
                                        </a>
                                        <div class="ml-4">
                                            <a href="{{ route('teacher.pay', $bank->payment->payable->teacher) }}" target="new" class="text-sm text-gray-900">{{ $bank->payment->payable->teacher->name }}</a>
                                            <div class="text-sm font-medium text-gray-900">{{ $bank->payment->payable->teacher->phone_number }}
                                            </div>
                                            <div class="text-sm text-gray-900">{{ $bank->payment->payable->teacher->email }}</div>
                                            <hr>
                                            <div class="text-sm font-medium text-gray-900">{{ $bank->payment->payable->subject->name }}
                                            </div>
                                            <div class="text-sm text-gray-900">Rs.{{$bank->payment->amount}}</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    {{$bank->paid_date->isoFormat('MMM Do Y, h:mm a')}}
                                </td>

                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <a target="new" href="{{ Storage::disk('do')->url('receipt/' . $bank->receipt) }}" class="relative inline-block px-3 py-1 font-semibold text-green-500 leading-tight">
                                        <img class="w-10 h-10 rounded-full" src="{{ Storage::disk('do')->url('receipt/' . $bank->receipt) }}" alt="avatar" />
                                    </a>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <a href="{{route('delete.bank.payment', $bank)}}" class="text-red-500 deletepaymentbtn">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
                                <strong class="font-bold">Opps!</strong>
                                <span class="block sm:inline"> No payment yet </span>
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                        {{ $banks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    var elems = document.getElementsByClassName('deletepaymentbtn');
    var confirmIt = function(e) {
        if (!confirm('Delete this?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
