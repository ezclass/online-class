<div class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    ID
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    User
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Registed At
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Phone Number
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Role
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Email and Phone No Verifi
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Status
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Show more
                                </th>
                                @role('super_admin')
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Edit
                                </th>
                                @endrole
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{$user->id}}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-10 h-10 rounded-full" src="{{ Storage::disk('do')->url('avatar/'. $user->avatar)}}" alt="" />
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{$user->name}}</div>
                                            <div class="text-sm text-gray-500">{{$user->email}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{$user->created_at->isoFormat('MMM Do Y, h:mm a')}}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{$user->phone_number}}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="inline-flex px-2 text-xs font-semibold leading-5 text-indigo-800 bg-indigo-100 rounded-full"> {{implode(', ', $user->roles->pluck('name')->toArray())}}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    @if ($user->email_verified_at)
                                    <p class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-gray-100 rounded-full">Verified(E)</p>
                                    @else
                                    <p class="inline-flex px-2 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">Not verified(E)</p>
                                    @endif

                                    <div class="mt-2">
                                        @if ($user->phone_number_verified_at)
                                        <p class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-gray-100 rounded-full">Verified(P)</p>
                                        @else
                                        <p class="inline-flex px-2 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">Not verified(P)</p>
                                        @endif
                                    </div>

                                </td>
                                @if ($user->status == 1)
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <a href="{{route('deactive.user',$user)}}" class="activeuser inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                        Active
                                    </a>
                                </td>
                                @else
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <a href="{{route('active.user',$user)}}" class="deactiveuser inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                        Deactive
                                    </a>
                                </td>
                                @endif

                                @if (implode(', ', $user->roles->pluck('name')->toArray()) == 'teacher')
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <a href="{{route('teacher.pay',$user)}}" class="text-yellow-500">Show More</a>
                                </td>
                                @else
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm"></td>
                                @endif

                                @role('super_admin')
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <a href="{{route('edit.user',$user)}}" class="text-yellow-500">Edit User</a>
                                </td>
                                @endrole

                            </tr>
                            @empty
                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
                                <span class="block sm:inline"> No inactive users</span>
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var elems = document.getElementsByClassName('deactiveuser');
    var confirmIt = function(e) {
        if (!confirm('Do you want to activate this user?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>

