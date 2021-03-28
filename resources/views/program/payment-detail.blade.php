<x-app-layout>

    <div class="bg-blue-100">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">All Students</h1>
                </div>
                @forelse($enrolments as $enrolment)
                <x-payment-detail :enrolment="$enrolment" />
                @empty
                opps
                @endforelse
            </div>
        </section>
    </div>

</x-app-layout>
