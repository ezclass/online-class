<x-app-layout>

    <section class="min-h-screen flex flex-col">
        <div class="flex flex-1 items-center justify-center">
            <div class="rounded-lg border-gray-300 sm:border-2 px-4 lg:px-24 py-16 lg:max-w-xl sm:max-w-md w-full text-center">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <x-alart />
                <div class="text-center">
                    <h1 class="font-bold tracking-wider text-3xl mb-8 w-full text-gray-600">
                        Phone Number Verification
                    </h1>
                    <form action="{{route('phone.number.change', Auth::user())}}" method="POST">
                        @csrf
                        <div class="py-2 text-left">
                            <input type="text" name="phone_number" value="{{Auth::user()->phone_number}}" class="border-2 border-gray-100 focus:outline-none bg-gray-100 block w-full py-2 px-4 rounded-lg focus:border-gray-700 " placeholder="Phone Number" />
                        </div>
                        <button type="submit" class="border-1 border-gray-100 focus:outline-none bg-gray-600 text-white font-bold tracking-wider block w-full p-1 rounded-lg focus:border-gray-700 hover:bg-gray-700">
                            Change Phone Number
                        </button>
                    </form>
                    <hr class="m-6 border-gray-500">
                    <div class="mt-4">
                        <div class="text-center mt-6">
                            <a href="{{route('send.otp')}}" class="text-lg border-1 border-gray-100 focus:outline-none bg-yellow-600 text-white font-bold tracking-wider block w-full p-1 rounded-lg focus:border-gray-700 hover:bg-gray-700"> Send verification code </a>
                        </div>
                        <form action="{{route('verify.otp', Auth::user())}}" method="POST">
                            @csrf
                            <div class="py-2 text-left mt-3">
                                <input type="text" name="otp" class="border-1 border-gray-100 focus:outline-none bg-gray-100 block w-full py-2 px-4 rounded-lg focus:border-gray-700 " placeholder="Enter 6-digit code" />
                            </div>
                            <div class="py-2 mt-2">
                                <button type="submit" class="border-1 border-gray-100 focus:outline-none bg-gray-600 text-white font-bold tracking-wider block w-full p-1 rounded-lg focus:border-gray-700 hover:bg-gray-700">
                                    Verify Code
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-messanger />

</x-app-layout>
