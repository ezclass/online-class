<x-app-layout>

    <section class="text-gray-700">
        <div class="container mx-auto">
            <div class="flex flex-wrap -m-4">
                @if(session('cancelled'))
                <div class="bg-red-100 border border-red-400 text-red-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                    <strong class="font-bold">Sorry!</strong>
                    <span class="block sm:inline">The payment was not successful.</span>
                </div>
                @endif

                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                    <strong class="font-bold">Congratulations!</strong>
                    <span class="block sm:inline">Your payment was successful.</span>
                </div>
                @endif
            </div>
        </div>
    </section>

    <div class="container mx-auto pt-10 pb-10">
        <div class="lg:flex md:flex xl:justify-around sm:flex flex-wrap md:justify-around sm:justify-around lg:justify-around">
            <x-student-program-card />
        </div>
    </div>

</x-app-layout>
