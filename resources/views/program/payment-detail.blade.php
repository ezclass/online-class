<x-app-layout>

    <x-dashboard-navigation />

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-14 mx-auto">

            <div class="grid grid-cols-2 justify-items-center">
                <div class="max-w-full text-sm rounded border shadow-sm pointer-events-auto bg-clip-padding w-80">
                    <div class="flex items-center px-3 py-2 text-gray-500 bg-gray-100 border-b-2 rounded-t bg-clip-padding">
                        <strong class="mr-auto">Class Start Date</strong>
                        <small>{{$program->start_date->format('M d,Y')}}</small>
                    </div>
                    <div class="p-3 bg-white">Class Fee Date </div>
                </div>

                <div class="max-w-full text-sm rounded border shadow-sm pointer-events-auto bg-clip-padding w-80">
                    <div class="flex items-center px-3 py-2 text-gray-500 bg-gray-100 border-b-2 rounded-t bg-clip-padding">
                        <strong class="mr-auto">Class End Date</strong>
                        <small>{{$program->end_date->format('M d,Y')}}</small>
                    </div>
                    <div class="p-3 bg-white">Hello, Tailwind! Bye Bye Boostrap.</div>
                </div>
            </div>

            @forelse($enrolments as $enrolment)
            <x-payment-detail :enrolment="$enrolment" />
            @empty
            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
                <strong class="font-bold">Opps!</strong>
                <span class="block sm:inline"> Students are not yet in your class </span>
            </div>
            @endforelse
        </div>
    </section>


</x-app-layout>
