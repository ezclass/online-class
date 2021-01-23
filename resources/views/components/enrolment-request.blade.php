<div class="container w-full md:w-5/5 xl:w-5/5  mx-auto px-2">
    <!--Title-->
    <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
        Enrolment Request
    </h1>

    <!--Card-->
    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
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
                                <div class="text-sm text-gray-500">{{$enrolment->program->grade->name}}</div>
                            </div>
                        </div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{$enrolment->program->name}}</div>
                        <div class="text-sm text-gray-900">{{$enrolment->program->subject->name}}</div>
                    </td>

                    <form action="{{route('enrolment.accept',$enrolment->id)}}" method="POST">
                        @csrf
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                            <input type="checkbox" name="payment_date" value="7">
                            <label> First Week </label> <br>

                            <input type="checkbox" name="payment_date" value="14">
                            <label> Second Week </label> <br>

                            <input type="checkbox" name="payment_date" value="21">
                            <label> Last Week </label> <br>

                            <input type="checkbox" name="payment_date" value="28">
                            <label> First Week </label> <br>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                            <input type="checkbox" name="payment_policy" value="0">
                            <label> Free Card </label> <br>

                            <input type="checkbox" name="payment_policy" value="50">
                            <label> 50% Bounes </label> <br>

                            <input type="checkbox" name="payment_policy" value="100">
                            <label> Normel Price </label> <br>
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
    <!--/Card-->

</div>
