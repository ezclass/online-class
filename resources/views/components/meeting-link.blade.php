<tr>
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        {{$meeting->created_at->isoFormat('MMM Do Y, h:mm a')}}
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

    @role('teacher')
    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
        <a href="{{route('meet.delete',$meeting)}}" class="deletebtn text-red-500">
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
