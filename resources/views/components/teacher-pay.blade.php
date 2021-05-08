<tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
    <td class="px-6 py-4 whitespace-nowrap">
        <img src="{{ Storage::disk('do')->url('avatar/'. $subscription->subscribable->teacher->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm font-medium text-gray-900">{{$subscription->subscribable->teacher->name}}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm font-medium text-gray-900">{{$subscription->subscribable->teacher->email}}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{$subscription->subscribable->teacher->email}}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{$subscription->subscribable->teacher->account_name}}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{$subscription->subscribable->teacher->account_number}}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{$subscription->subscribable->teacher->bank_name}}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{$subscription->subscribable->teacher->branch}}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">

        </div>
    </td>
</tr>
