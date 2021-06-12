<x-app-layout>
    <div class="min-h-screen min-w-screen flex items-center justify-center">
        <div class="flex flex-col px-6 py-8 bg-white shadow-lg">
            <h1 class="mb-8 font-extrabold text-gray-800 leading-6">Select payment method</h1>
            <ul class="flex flex-col space-y-4 text-gray-900">
                <a href="{{ route('checkout', $enrolment) }}" class="bg-green-100 border-l-4 border-green-300 hover:bg-green-500 rounded-md w-full px-6 py-4 cursor-pointer">
                    Online Payment
                </a>
                <a href="{{ route('bank.payment', $enrolment) }}" class="bg-purple-100 border-l-4 border-purple-300 hover:bg-purple-500 rounded-md w-full px-6 py-4 cursor-pointer">
                    Bank Payment
                </a>
            </ul>
        </div>
    </div>
</x-app-layout>
