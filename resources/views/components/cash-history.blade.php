<div class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    for month
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Ammount
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Paid Date
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Note
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($paids as $paid)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{$paid->created_at->format('M ,Y')}}</p>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">Rs.{{$paid->amount}}</p>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{$paid->created_at->format('d M, Y - h:m a')}}</p>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{$paid->summary}}</p>
                                </td>
                            </tr>
                            @empty
                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
                                <span class="block sm:inline"> The money has not been received yet </span>
                            </div>
                            @endforelse
                        </tbody>

                    </table>
                    <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                        {{$paids->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
