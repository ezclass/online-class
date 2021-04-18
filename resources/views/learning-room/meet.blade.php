<x-learning-room :lesson="$lesson">

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    @can('create', $lesson)
    <div class=" flex items-center justify-center ">
        <div class="flex flex-col shadow-xl">
            <div class="py-6 px-14 bg-gradient-to-tr from-blue-500 to-blue-300 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                <h2 class="text-white text-xs uppercase">Send the link to students to attend the meeting</h2>
            </div>
            <form action="{{route('meet.save',$lesson)}}" method="POST">
                @csrf
                <div class="flex flex-col py-6 px-8 space-y-5 bg-white">
                    <input type="text" name="link" placeholder="Enter your meeting Link" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    <input type="text" name="password" placeholder="Enter your meeting password" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    <button type="submit" class="w-full py-3 bg-blue-400 text-white rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-lg">
                        Send to Students
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endcan

    <div class="mt-36 antialiased font-sans">
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
                                <x-meeting-link :meeting="$meeting" />
                                @empty
                                <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                                    <strong class="font-bold">oops!</strong>
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

</x-learning-room>
