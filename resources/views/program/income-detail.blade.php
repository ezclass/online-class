<x-app-layout>

    <x-dashboard-navigation />

    <div class="bg-yellow-100 border text-center border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
        <span class="block sm:inline">  Please note that we (Zencemart Education-Business name) / (homeclass.lk-web) charge 10% of the fees you charge per student. </span>
    </div>

    <div class="text-center mt-7 text-xl">
        Income Details in : <b>{{$program->subject->name}} Class</b>
    </div>

    <div class="lg:m-20 m-2 pb-6">
        <div class="lg:ml-6 mt-7">
            <span>මෙම මාසයේ {{$program->subject->name}} පන්තිය සඳහා ඔබේ ආදායම : </span>  <span class="ml-4 underline">
                Rs.{{$payments - $payments * 10 / 100}} //
            </span>
        </div>
    </div>

</x-app-layout>
