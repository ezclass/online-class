<tr>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <div class="flex items-center">
            <div class="ml-3">
                <p class="text-gray-900 whitespace-no-wrap">
                    {{$subscription->payment_id}}
                </p>
            </div>
        </div>
    </td>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <p class="text-gray-900 whitespace-no-wrap">
            {{$subscription->updated_at}}
        </p>
    </td>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        {{$subscription->amount}}
    </td>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <span class="relative inline-block px-3 py-1 font-semibold text-yellow-500 leading-tight">
            <a href="" class="relative"> - </a>
        </span>
    </td>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <span class="relative inline-block px-3 py-1 font-semibold text-green-500 leading-tight">
           Success
        </span>
    </td>
</tr>