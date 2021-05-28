<div class="mt-6 antialiased font-sans">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Date
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Download
                                    </th>
                                    @role('teacher')
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Download active / inactive
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Delete
                                    </th>
                                    @endrole
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($documents as $document)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        {{$document->created_at->isoFormat('MMM Do Y, h:mm a')}}

                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        {{$document->title}}

                                    </td>
                                    @if ($document->download == 1)
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <a href="{{route('file.download', $document)}}" class="text-green-500">Download</a>
                                    </td>
                                    @else
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <span class="text-gray-500">Download is inactive</span>
                                    </td>
                                    @endif
                                    @role('teacher')

                                    @if ($document->download == 0)
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <a href="{{route('download.active', $document)}}">
                                            <span class="ml-4 border rounded-full border-grey flex items-center w-12 justify-start">
                                                <span class="rounded-full border w-6 h-6 border-grey bg-red-500 shadow">
                                                </span>
                                            </span>
                                        </a>
                                    </td>
                                    @else
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <a href="{{route('download.inactive', $document)}}">
                                            <span class="ml-4 border rounded-full border-grey flex items-center w-12 bg-green justify-end">
                                                <span class="rounded-full border w-6 h-6 border-grey bg-green-500 shadow">
                                                </span>
                                            </span>
                                        </a>
                                    </td>
                                    @endif

                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <a href="{{route('document.delete', $document)}}" class="deletebtn text-red-500">
                                            Delete
                                        </a>
                                    </td>
                                    @endrole
                                </tr>

                                @empty
                                <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                                    <span class="block sm:inline text-yellow-700">Documents not yet available</span>
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                            {{ $documents->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    var elems = document.getElementsByClassName('deletebtn');
    var confirmIt = function(e) {
        if (!confirm('Delete this?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
