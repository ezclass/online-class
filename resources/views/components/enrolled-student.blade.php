<div class="container w-full md:w-5/5 xl:w-5/5  mx-auto px-2">

    <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
        enrolleded Students
    </h1>

    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
        <table id="table2" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
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
                </tr>
            </thead>
            <tbody>
                @foreach($enrolments as $enrolled)
                @if($enrolled->accepted_at != null)
                <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-10 h-10 rounded-full" src="{{ asset('storage/avatar/'. $enrolled->student->avatar )}}" alt="" />
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">{{$enrolled->student->name}}</div>
                                <div class="text-sm text-gray-500">{{$enrolled->program->grade->name}}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{$enrolled->program->name}}</div>
                        <div class="text-sm text-gray-900">{{$enrolled->program->subject->name}}</div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{$enrolled->payment_date}}</div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{$enrolled->payment_policy}}</div>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
