<div class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Student
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Date of class enroled
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Payment Date
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Payment Policy
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Update Payment Date and <br>
                                    Payment Policy
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Payment History
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    To pay for tuition, <br> make a reminder
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($enrolments as $enrolment)
                            <tr>
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
                                                {{$enrolment->student->email}}
                                            </p>
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{$enrolment->student->phone_number}}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{$enrolment->accepted_at->format('M d,Y')}}</p>
                                </td>
                                <form action="{{route('enroll.update', $enrolment->getRouteKey())}}" method="POST">
                                    @csrf
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <select name="payment_date" id="">
                                            <option selected disabled>
                                                @if ($enrolment->payment_date == 1)
                                                Daily
                                                @elseif ($enrolment->payment_date == 7)
                                                First Week
                                                @elseif ($enrolment->payment_date == 14)
                                                Second Week
                                                @elseif ($enrolment->payment_date == 21)
                                                Third Week
                                                @else
                                                Last Week
                                                @endif
                                            </option>
                                            <option value="1">Daily</option>
                                            <option value="7">First Week ( 7 )</option>
                                            <option value="14">Second Week ( 14 )</option>
                                            <option value="21">Third Week ( 21 )</option>
                                            <option value="27">Last Week ( 27 )</option>
                                        </select>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <select name=" payment_policy" id="">
                                            <option selected disabled>
                                                @if ($enrolment->payment_policy == 0)
                                                <span class="text-green-500">Free Card</span>
                                                @else
                                                Normel Price
                                                @endif
                                            </option>
                                            <option value="0">Free Card</option>
                                            <option value="100">Normel Price</option>
                                        </select>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                            <button type="submit" class="text-green-500">
                                                {{ __('Update') }}
                                            </button>
                                        </a>
                                    </td>
                                </form>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <a href="{{route('payment.history',[$enrolment, $enrolment->student])}}" class="text-blue-500 whitespace-no-wrap">
                                        Payment History
                                    </a>
                                </td>
                                @if ($enrolment->remind == null)
                                <form action="{{route('send.remind', $enrolment->getRouteKey())}}" method="POST">
                                    @csrf
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <select name="remind" id="">
                                            <option selected disabled>remind</option>
                                            <option value="Please pay the tuition fee">Please pay the tuition fee</option>
                                        </select>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <span class="relative inline-block px-3 py-1 font-semibold text-yellow-500 leading-tight">

                                            <x-primary-button class="">
                                                {{ __('Send') }}
                                            </x-primary-button>
                                        </span>
                                    </td>
                                </form>
                                @else
                                <form action="{{route('cancel.remind', $enrolment->getRouteKey())}}" method="POST">
                                    @csrf
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <x-warning-button class="">
                                            {{ __('Cancel') }}
                                        </x-warning-button>
                                    </td>
                                </form>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">

                                </td>
                                @endif

                                @if ($enrolment->active == 1)
                                <form action="{{route('student.block',$enrolment)}}" method="POST">
                                    @csrf
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <span class="relative inline-block px-3 py-1 font-semibold text-red-500 leading-tight">
                                            <x-danger-button class="">
                                                {{ __('Block') }}
                                            </x-danger-button>
                                        </span>
                                    </td>
                                </form>
                                @else
                                <form action="{{route('student.unblock',$enrolment)}}" method="POST">
                                    @csrf
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">

                                        <x-warning-button class="">
                                            {{ __('UnBlock') }}
                                        </x-warning-button>

                                    </td>
                                </form>
                                @endif
                            </tr>
                            @empty
                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
                                <span class="block sm:inline"> Students are not yet in your class </span>
                            </div>
                            @endforelse
                        </tbody>

                    </table>
                    <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                        {{$enrolments->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
