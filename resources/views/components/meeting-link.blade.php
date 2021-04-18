<tr>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        {{$meeting->created_at->format('M d, Y')}}
    </div>
</td>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
            <input type="text" value="{{$meeting->link}}" id="link" class="text-gray-900 whitespace-no-wrap">
        </div>
    </td>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <a href="{{$meeting->link}}" target="new" class="text-blue-500"><u>Click Go to Meeting</u></a>
    </td>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <button onclick="linkFunction()" class="text-green-500 whitespace-no-wrap">Copy Link</button>
    </td>

    @if ($meeting->password !== null)
        <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
            <input type="text" value="{{$meeting->password}}" id="password">
        </td>

        <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
            <button onclick="passwordFunction()" class="text-green-500">Copy Password</button>
        </td>
        @else
        <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
           -
        </td>

        <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
           -
        </td>
        @endif

    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        @role('teacher')
        <form action="{{route('meet.delete',$meeting)}}" method="POST">
            @csrf
            <div class="py-6 px-8 space-y-5 bg-white">
                <x-danger-button type="submit">
                    {{__('Detele')}}
                </x-danger-button>
            </div>
        </form>
        @endrole
    </td>
</tr>
