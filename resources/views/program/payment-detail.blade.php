<x-app-layout>

<x-dashboard-navigation />

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-14 mx-auto">
                <div class="flex flex-col text-center w-full mb-10">
                    <h1 class="sm:text-xl text-xl font-medium title-font mb-2 text-gray-900">All Students</h1>
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
