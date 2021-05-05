<tr>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        {{$document->created_at->format('M d, Y , h:m a')}}
        </div>
    </td>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        {{$document->title}}
        </div>
    </td>

    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <a href="{{route('file.download',$document)}}" class="text-green-500">Download</a>
    </td>
    @role('teacher')
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <form action="{{route('file.delete',$document)}}" method="POST">
            @csrf
            <div class="py-6 px-8 space-y-5 bg-white">
                <x-danger-button type="submit">
                    {{__('Detele')}}
                </x-danger-button>
            </div>
        </form>
    </td>
    @endrole
</tr>
