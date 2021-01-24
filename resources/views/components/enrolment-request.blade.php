<div class="mt-10 container w-full md:w-5/5 xl:w-5/5  mx-auto px-2">
    <div id='recipients' class="p-6 lg:mt-0 rounded shadow bg-white">
        <table id="table1" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Student
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Class
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Payment Date
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Payment Policy
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($enrolments as $enrolment)
                @if($enrolment->accepted_at == null)
                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-10 h-10 rounded-full" src="{{ asset('storage/avatar/'. $enrolment->student->avatar )}}" alt="" />
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">{{$enrolment->student->name}}</div>
                            </div>
                        </div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-md text-gray-900">{{$enrolment->program->name}}</div>
                        <div class="text-sm text-blue-500">{{$enrolment->program->subject->name}}</div>
                    </td>

                    <form action="{{route('enroll.request.accept', $enrolment->id)}}" method="POST">
                        @csrf
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                            <select name="payment_date" id="">
                                <option selected>select</option>
                                <option value="7">First Week</option>
                                <option value="14">Second Week</option>
                                <option value="21">Third Week</option>
                                <option value="28">Last Week</option>
                            </select>
                        </td>

                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                            <select name=" payment_policy" id="">
                                <option selected>select</option>
                                <option value="0">Free Card</option>
                                <option value="50">50% Bounes</option>
                                <option value="100">Normel Price</option>
                            </select>
                        </td>

                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                <x-success-button class="ml-3 mt-5">
                                    {{ __('Accept') }}
                                </x-success-button>
                            </a>
                        </td>
                    </form>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
