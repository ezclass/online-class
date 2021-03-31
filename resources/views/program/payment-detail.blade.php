<x-app-layout>

    <x-dashboard-navigation />

    <div class="mt-8 grid lg:grid-cols-2 justify-items-center">
        <div class="max-w-full text-sm rounded border shadow-sm pointer-events-auto bg-clip-padding w-80">
            <div class="flex items-center px-3 py-2 text-gray-500 bg-indigo-100 border-b-2 rounded-t bg-clip-padding">
                <strong class="mr-auto">Class Start Date</strong>
                <small>{{$program->start_date->format('M d,Y')}}</small>
            </div>
            <div class="p-3 bg-white">Class Fee, Rs: {{$program->fees}} </div>
        </div>

        <div class="max-w-full mt-4 lg:mt-0 text-sm rounded border shadow-sm pointer-events-auto bg-clip-padding w-80">
            <div class="flex items-center px-3 py-2 text-gray-500 bg-indigo-100 border-b-2 rounded-t bg-clip-padding">
                <strong class="mr-auto">Class End Date</strong>
                <small>{{$program->end_date->format('M d,Y')}}</small>
            </div>
            <div class="p-3 bg-white">Class Duration : {{$program->start_date->longRelativeToNowDiffForHumans($program->end_date)}}</div>
        </div>
    </div>

    <hr class="mt-10">

    <body class="antialiased font-sans bg-gray-400">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Date of class enroled
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Payment History
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        To pay for tuition, <br> make a reminder
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Action
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($enrolments as $enrolment)
                                <x-payment-detail :enrolment="$enrolment" />
                                @empty
                                <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
                                    <strong class="font-bold">Opps!</strong>
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
    </body>

</x-app-layout>
