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
            {{$subscription->updated_at->isoFormat('MMM Do Y, h:mm a')}}
        </p>
    </td>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        {{$subscription->amount}}
    </td>

    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <span class="relative inline-block px-3 py-1 font-semibold text-green-500 leading-tight">
            @if ($subscription->status == 2)
            Success
            @endif
        </span>
    </td>
</tr>
