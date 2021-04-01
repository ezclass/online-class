<x-app-layout>
    <div class="min-h-screen min-w-screen flex items-center justify-center">
        <div class="flex flex-col px-6 py-6 bg-white shadow-lg">
            <h1 class="mb-8 font-extrabold text-gray-800 leading-6">Select your payment option</h1>
            <ul class="flex flex-col space-y-4 text-gray-900">
                <a href="{{route('bank.payment',$enrolment)}}" class="bg-yellow-100 border-l-4 border-yellow-300 rounded-md w-full px-6 py-4 cursor-pointer">Bank payments</a>
                <a href="{{route('checkout',$enrolment)}}" class="bg-green-100 border-l-4 border-green-300 rounded-md w-full px-6 py-4 cursor-pointer">Online payments</a>
            </ul>
        </div>
    </div>
</x-app-layout>
