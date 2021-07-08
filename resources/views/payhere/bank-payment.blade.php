<x-app-layout>

    <div class="antialiased sans-serif">
        <div class="container mx-auto py-6 px-4">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold mb-6 pb-2 tracking-wider uppercase">Invoice</h2>
            </div>

            <div class="flex flex-wrap justify-between mb-8">
                <div class="w-full md:w-1/3 mb-2 md:mb-0">
                    <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Paid To:</label>
                    <div class="mb-1 bg-indigo-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" x-model="billing.name">Bank name : <span class="text-black">Sampath Bank</span></div>
                    <div class="mb-1 bg-indigo-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" x-model="billing.name">Account name : <span class="text-black">Zencemart Education</span></div>
                    <div class="mb-1 bg-indigo-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" x-model="billing.address"> Account Number : <span class="text-black">116714024867</span></div>
                    <div class="mb-1 bg-indigo-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" x-model="billing.extra">Amount to be paid : <span class="text-black">Rs.{{$enrolment->program->fees}}</span></div>
                </div>
                <div class="w-full md:w-1/3 mb-2 md:mb-0">
                    <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Contact:</label>
                    <div class="mb-1 bg-indigo-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" x-model="billing.name">T.p : 077-5486681</div>
                    <div class="mb-1 bg-indigo-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" x-model="billing.address"> E-mail: homeclass.lk@gmail.com</div>
                    <div class="mb-1 bg-indigo-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" x-model="billing.extra">Facebook : <a target="new" href="https://www.facebook.com/homeclass.lk" class="underline">Click</a></div>
                </div>
            </div>
            <hr>
        </div>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form action="{{route('save.bank.payment', $enrolment)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex items-center justify-center pb-32">
            <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
                <div class="mt-3 flex justify-center">
                    <div class="flex">
                        <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Fill This Form</h1>
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Address</label>
                    <input name="address" :value="old('address')" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Address" required autofocus />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">City</label>
                        <input name="city" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="City" required />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Paid Date and Time</label>
                        <input name="paid_date" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="datetime-local" placeholder="Paid Date and Time" required />
                    </div>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload Receipt(Photo)</label>
                    <div class='flex items-center justify-center w-full'>
                        <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Select a Receipt(photo)</p>
                            </div>
                            <input type='file' name="receipt" class="hidden" required />
                        </label>
                    </div>
                </div>
                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <button type="submit" class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Submit</button>
                </div>
            </div>
        </div>
    </form>

    <x-messanger />
    <x-whatsapp />
</x-app-layout>
