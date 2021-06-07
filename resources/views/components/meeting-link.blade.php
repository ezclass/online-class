<div class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Create at
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Meeting Link
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Go to Meeting
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Copy Link
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Password
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Copy Password
                                </th>
                                @role('teacher')
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Delete
                                </th>
                                @endrole
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($meetings as $meeting)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    {{$meeting->created_at->isoFormat('MMM Do Y, h:mm a')}}

                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <input type="text" value="{{$meeting->link}}" id="link" class="text-gray-900 whitespace-no-wrap">

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
                            @empty
                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                                <span class="block sm:inline text-yellow-700">The link does not exist yet</span>
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function linkFunction() {
        /* Get the text field */
        var copyText = document.getElementById("link");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied the text: " + copyText.value);
    }

    function passwordFunction() {
        /* Get the text field */
        var copyText = document.getElementById("password");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied the text: " + copyText.value);
    }
</script>

<script type="text/javascript">
    var elems = document.getElementsByClassName('deletebtn');
    var confirmIt = function(e) {
        if (!confirm('Do you want to delete this Link?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
