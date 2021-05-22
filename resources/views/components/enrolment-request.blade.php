<body class="antialiased font-sans bg-gray-400">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Request Date
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Student Detail
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Class /Subject
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Payment Date
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Payment Policy
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Accept Request
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Delete Request
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($enrolments as $enrolment)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{$enrolment->created_at->format('d M, h:i A')}}</p>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full" src="{{ Storage::disk('do')->url('avatar/'. $enrolment->student->avatar)}}" alt="avatar" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{$enrolment->student->name}}
                                            </p>
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{$enrolment->student->phone_number}}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{$enrolment->program->grade->name}} / {{$enrolment->program->subject->name}}</p>
                                </td>
                                <form action="{{route('accept.enroll.request', $enrolment)}}" method="POST">
                                    @csrf
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <select name="payment_date" id="">
                                            <option selected disabled>select</option>
                                            <option value="1">Daily</option>
                                            <option value="7">First Week ( 7 )</option>
                                            <option value="14">Second Week ( 14 )</option>
                                            <option value="21">Third Week ( 21 )</option>
                                            <option value="25">Last Week ( 25 )</option>
                                        </select>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <select name=" payment_policy" id="">
                                            <option selected disabled>select</option>
                                            <option value="0">Free Card</option>
                                            <option value="100">Normel Price</option>
                                        </select>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <x-success-button>
                                            {{ __('Accept') }}
                                        </x-success-button>
                                    </td>
                                </form>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <a href="{{route('enroll.request.delete', $enrolment)}}" class="text-red-500 deleterequest">Delete Request</a>
                                </td>
                            </tr>
                            @empty
                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
                                <span class="block sm:inline"> There is no enrollment request for your class </span>
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    var elems = document.getElementsByClassName('deleterequest');
    var confirmIt = function(e) {
        if (!confirm('Do you want to delete this enrollment request?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
