<x-admin>
    <h3 class="mt-6 text-xl">All Opinion Request : {{$opinions->count()}}</h3>
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
                                        Request At
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Opinions
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Accept Opinion
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Delete Opinion
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($opinions as $opinion)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$opinion->id}}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10">
                                                <img src="{{ Storage::disk('do')->url('avatar/'. $opinion->client->avatar )}}" alt="avatar" class="inline-block h-8 w-8 rounded-full ring-2 ring-white">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{$opinion->client->name}}</div>
                                                <div class="text-sm text-gray-500">{{$opinion->email}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <textarea name="" id="" cols="30" rows="5">{{$opinion->opinion}}</textarea>
                                        <p class="text-gray-900 whitespace-no-wrap"></p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <a href="{{route('accept.opinion',$opinion)}}" class="text-green-500 acptbtn">Accept Opinion</a>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <a href="{{route('delete.opinion',$opinion)}}" class="text-red-500 deletebtn">Delete Opinion</a>
                                    </td>
                                </tr>
                                @empty
                                <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
                                    <span class="block sm:inline"> not yet opinions</span>
                                </div>
                                @endforelse
                            </tbody>

                        </table>
                        <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var elems = document.getElementsByClassName('acptbtn');
        var confirmIt = function(e) {
            if (!confirm('Do you want to accept this opinion?')) e.preventDefault();
        };
        for (var i = 0, l = elems.length; i < l; i++) {
            elems[i].addEventListener('click', confirmIt, false);
        }

        var elems = document.getElementsByClassName('deletebtn');
        var confirmIt = function(e) {
            if (!confirm('Do you want to delete this opinion?')) e.preventDefault();
        };
        for (var i = 0, l = elems.length; i < l; i++) {
            elems[i].addEventListener('click', confirmIt, false);
        }
    </script>

</x-admin>
