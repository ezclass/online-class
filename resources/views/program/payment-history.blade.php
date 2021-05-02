<x-app-layout>

    <div class="text-center mt-9">
        @role('teacher')
        <x-responsive-nav-link href="{{route('student.detail',$enrolment->program)}}">
            {{__('Go to Back')}}
        </x-responsive-nav-link>
        @endrole

        @role('student')
        <x-responsive-nav-link href="{{ route('student.dashboard')}}">
            {{__('Dashboard')}}
        </x-responsive-nav-link>
        @endrole
    </div>

    <div class="mt-8 grid lg:grid-cols-2 justify-items-center">
        <div class="text-md">
            <div>
                <strong class="mr-10">{{$enrolment->program->subject->name}}</strong>
            </div>
            <div class="mt-2">
                Class Fee, Rs: {{$enrolment->program->fees}}
            </div>
        </div>
        <div class="mt-4 lg:mt-0 text-md">
            <div class="mr-10">
                Student Name: {{$student->name}}
            </div>
            <div class="mt-2">
                Teacher Name: {{$enrolment->program->teacher->name}}
            </div>
        </div>
    </div>

    <body class="antialiased font-sans bg-gray-400">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Payment Id
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Payment Date
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Amount(LKR)
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Payment Status
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($subscriptions as $subscription)
                                <x-payment-history :subscription="$subscription" />
                                @empty
                                <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
                                    <strong class="font-bold">Opps!</strong>
                                    <span class="block sm:inline"> No payment yet </span>
                                </div>
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>
