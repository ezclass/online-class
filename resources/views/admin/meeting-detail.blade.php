<x-admin>

    <div class="justify-center mt-6">
        <a href="{{route('program.detail', $lesson->program)}}">
            <x-warning-button type="button">
                {{__('Go Back')}}
            </x-warning-button>
        </a>
    </div>
    <div class="m-6">
        <span class="text-green-500">all meeting link : {{$meetings->count()}}</span>
    </div>

    <div class="antialiased font-sans">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        meeting ID
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Created At
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Meeting Link
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Password
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Deleted At
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($meetings as $meeting)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$meeting->id}}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$meeting->created_at->isoFormat('MMM Do Y, h:mm a')}}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$meeting->link}}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$meeting->password}}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-red-500 whitespace-no-wrap">{{$meeting->deleted_at}}</p>
                                    </td>
                                </tr>
                                @empty
                                <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
                                    <span class="block sm:inline">The link does not exist yet </span>
                                </div>
                                @endforelse
                            </tbody>

                        </table>
                        <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                            {{$meetings->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin>
