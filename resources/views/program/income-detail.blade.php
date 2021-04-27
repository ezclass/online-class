<x-app-layout>

    <x-dashboard-navigation />

    <div class="text-center mt-7">
        Income Details in : <b>{{$program->subject->name}}</b>
    </div>

    <div class="lg:m-20">
        <div class="lg:ml-6 mt-7">
            <span>මෙම මාසය සඳහා ලැබුණු මුළු මුදල : </span> {{$subscriptions}}
        </div>

        <div class="lg:ml-6">
            <span>මෙම මාසය සඳහා ඔබේ ආදායම : </span>
            <span class="mr-4">
                {{$subscriptions}} - 10%
            </span> =
            <span class="ml-4 underline border-4">
                Rs.{{$subscriptions - $subscriptions * 10 / 100}} //
            </span>
        </div>
    </div>

</x-app-layout>
