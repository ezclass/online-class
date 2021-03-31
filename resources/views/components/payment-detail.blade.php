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
