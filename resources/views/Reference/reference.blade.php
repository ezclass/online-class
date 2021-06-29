<x-app-layout>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />
    <div class="font-sans min-h-screen antialiased bg-gray-900 pt-24 pb-5">
        <div class="flex flex-col justify-center sm:w-96 sm:m-auto mx-5 mb-5 space-y-8">
            <h1 class="font-bold text-center text-4xl text-yellow-500">Add<span class="text-blue-500">Reference</span></h1>
            <form action="{{route('save.reference', Auth::user())}}" method="POST">
                @csrf
                <div class="flex flex-col bg-white p-10 rounded-lg shadow space-y-6">

                    </h1>
                    <div class="bg-indigo-100 border border-indigo-400 text-indigo-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                        <span class="block sm:inline text-indigo-700">
                            ඔබ ගුරුවරයෙකු යටතේ Register වී ඇත්නම් එම ගුරුවරයාගේ Reference Number එක පහතින් යොදා Submit කරන්න.
                        </span>
                    </div>

                    <div class="flex flex-col space-y-1">
                        HRN (Reference Number) <input type="text" name="reference" id="reference" class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow" placeholder="Reference Number" />
                    </div>

                    <hr>

                    <div class="bg-indigo-100 border border-indigo-400 text-indigo-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                        <span class="block sm:inline text-indigo-700">
                            ඔබ Reference Number නොමැතිව Register වී ඇත්නම් පහත කොටුව Click කර හරි සලකුණ වැටුණු පසු Submit බටනය Click කරන්න.
                        </span>
                    </div>

                    <div class="relative">
                        <input type="checkbox" name="homeclass_student" value="Homeclass Student" id="remember" />
                        <label class="inline-block align-middle" for="remember">I am a Homeclass Student</label>
                    </div>

                    <div class="flex flex-col-reverse sm:flex-row sm:justify-between items-center">
                        <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-2 rounded focus:outline-none shadow hover:bg-blue-700 transition-colors">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <x-messanger />

</x-app-layout>
