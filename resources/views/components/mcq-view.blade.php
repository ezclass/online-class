<div class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Cteate Date
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Description
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Date and time to submit
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Link
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Go to Form
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Copy Link
                                </th>
                                @role('teacher')
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Delete
                                </th>
                                @endrole
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($mcqs as $mcq)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    {{$mcq->created_at->isoFormat('MMM Do Y, h:mm a')}}

                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    {{ $mcq->description }}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    {{$mcq->submitted_at->isoFormat('MMM Do, h:mm a')}}
                                </td>

                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <input type="text" value="{{ $mcq->link }}" id="linkcopy" class="text-gray-900 whitespace-no-wrap">
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <a href="{{$mcq->link}}" target="new" class="text-blue-500"><u>Click Go to Form</u></a>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <button onclick="linkFunction()" class="text-green-500 whitespace-no-wrap">Copy Link</button>
                                </td>
                                @role('teacher')
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <a href="{{route('mcq.delete', $mcq)}}" class="deletebtn text-red-500">
                                        Delete
                                    </a>
                                </td>
                                @endrole
                            </tr>

                            @empty
                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                                <span class="block sm:inline text-yellow-700">The form link does not exist yet</span>
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                        {{ $mcqs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function linkFunction() {
        /* Get the text field */
        var copyText = document.getElementById("linkcopy");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied the link: " + copyText.value);
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
