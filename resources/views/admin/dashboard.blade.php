<x-admin>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <h3 class="mt-6 text-xl">All Users</h3>
    <div class="mt-5 container w-full md:w-5/5 xl:w-5/5  mx-auto px-2">
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            User
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Phone Number
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Status
                        </th>
                        @role('super_admin')
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Edit
                        </th>
                        @endrole
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                        <td class="px-6 py-4 whitespace-nowrap">
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
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">0757862096</div>
                        </td>

                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                           {{implode(', ', $user->roles->pluck('name')->toArray())}}
                        </td>

                        @if ($user->status == 1)
                        <form action="{{route('deactive.user',$user)}}" method="POST">
                            @csrf
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button type="submit" class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                    Active
                                </button>
                            </td>
                        </form>
                        @else
                        <form action="{{route('active.user',$user)}}" method="POST">
                            @csrf
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button type="submit" class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                    Deactive
                                </button>
                            </td>
                        </form>
                        @endif

                        @role('super_admin')
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                            <a href="{{route('edit.user',$user)}}" class="text-yellow-500">Edit User</a>
                        </td>
                        @endrole
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin>
