<tr>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <div class="flex items-center">
            <div class="flex-shrink-0 w-10 h-10">
                <img class="w-full h-full rounded-full" src="{{ asset('storage/avatar/'. $enrolment->student->avatar )}}" alt="" />
            </div>
            <div class="ml-3">
                <p class="text-gray-900 whitespace-no-wrap">
                    {{$enrolment->student->name}}
                </p>
            </div>
        </div>
    </td>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <p class="text-gray-900 whitespace-no-wrap">{{$enrolment->accepted_at->format('M d,Y')}}</p>
    </td>
    <form action="{{route('enroll.update', $enrolment->getRouteKey())}}" method="POST">
        @csrf
        <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
            <select name="payment_date" id="">
                <option selected disabled>
                    @if ($enrolment->payment_date == 1)
                    Daily
                    @elseif ($enrolment->payment_date == 7)
                    First Week
                    @elseif ($enrolment->payment_date == 14)
                    Second Week
                    @elseif ($enrolment->payment_date == 21)
                    Third Week
                    @else
                    Last Week
                    @endif
                </option>
                <option value="1">Daily</option>
                <option value="7">First Week ( 7 )</option>
                <option value="14">Second Week ( 14 )</option>
                <option value="21">Third Week ( 21 )</option>
                <option value="28">Last Week ( 28 )</option>
            </select>
        </td>

        <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
            <select name=" payment_policy" id="">
                <option selected >
                    @if ($enrolment->payment_policy == 0)
                   <span class="text-green-500">Free Card</span>
                    @elseif ($enrolment->payment_policy == 50)
                    50% Offer
                    @else
                    Normel Price
                    @endif
                </option>
                <option value="0">Free Card</option>
                <option value="50">50% Offer</option>
                <option value="100">Normel Price</option>
            </select>
        </td>

        <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
            <a href="#" class="text-indigo-600 hover:text-indigo-900">
                <x-success-button class="ml-3 mt-5">
                    {{ __('Edit') }}
                </x-success-button>
            </a>
        </td>
    </form>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <a href="{{route('payment.history',[$enrolment, $enrolment->student])}}" class="text-blue-500 whitespace-no-wrap">
            Payment History
        </a>
    </td>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <span class="relative inline-block px-3 py-1 font-semibold text-yellow-500 leading-tight">
            <a href="" class="relative">Send for student</a>
        </span>
    </td>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <span class="relative inline-block px-3 py-1 font-semibold text-red-500 leading-tight">
            <a href="" class="relative">Block</a>
        </span>
    </td>
</tr>
