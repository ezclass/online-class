<x-app-layout>

    <x-dashboard-navigation />

    <div class="text-center mt-4">
        Income Details in : <b>{{$program->subject->name}}</b>
    </div>

   {{$subscriptions}}

</x-app-layout>
