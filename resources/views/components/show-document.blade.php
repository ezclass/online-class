<tr>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        {{$document->created_at->isoFormat('MMM Do Y, h:mm a')}}
        </div>
    </td>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        {{$document->title}}
        </div>
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

<script type="text/javascript">
    var elems = document.getElementsByClassName('deletebtn');
    var confirmIt = function(e) {
        if (!confirm('Do you want to delete this Link?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
