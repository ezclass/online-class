<x-app-layout>

    <x-profile-heder />
    <x-dashboard-navigation />

    <div class="bg-yellow-100 border text-center border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
        <span class="block sm:inline">
            Please note that we (Sensemart Education-Business Name) / (homeclass.lk-web) charge 10% for students who register using your reference number and 30% for students who contact us.
         </span>
    </div>

    <div class="text-center mt-7 text-xl">
        Income Details in : <b>{{$program->subject->name}} Class</b>
    </div>

    <div class="m-2 pb-6">
        <div class="lg:ml-6 mt-7">
            <span>මෙම මාසයේ {{$program->subject->name}} පන්තිය සඳහා මුළු අදායම : </span><span class="ml-4 underline text-green-500">
                Rs.{{$payments->sum('amount') /100 * 90 + $homepayments->sum('amount') / 100 * 70}} //
            </span>
        </div>
    </div>

    <div class="m-2 pb-6">
        <div class="lg:ml-6 mt-7">
            <span>මෙම මාසයේ {{$program->subject->name}} පන්තිය සඳහා Reference අංක බාවිතා කල සිසුන්ගෙන් ලැබුන අදායම : </span>  <span class="ml-4 underline">
                Rs.{{$payments->sum('amount') /100 * 90}} //
            </span>
        </div>
    </div>

    <div class="m-2 pb-6">
        <div class="lg:ml-6 mt-7">
            <span>මෙම මාසයේ {{$program->subject->name}} පන්තිය සඳහා HomeClass සිසුන්ගෙන් ලැබුන අදායම  : </span>  <span class="ml-4 underline">
                Rs.{{$homepayments->sum('amount') / 100 * 70}} //
            </span>
        </div>
    </div>

</x-app-layout>
