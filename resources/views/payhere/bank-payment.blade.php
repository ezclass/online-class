<x-app-layout>
    <div class="antialiased sans-serif min-h-screen bg-white" style="min-height: 900px">
        <div class="container mx-auto py-6 px-4">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold mb-6 pb-2 tracking-wider uppercase">Invoice</h2>
            </div>

            <div class="flex flex-wrap justify-between mb-8">
                <div class="w-full md:w-1/3 mb-2 md:mb-0">
                    <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Bill To:</label>
                    <div class="mb-1 bg-indigo-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" x-model="billing.name">Billing Account name : Zencemart Education</div>
                    <div class="mb-1 bg-indigo-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" x-model="billing.address"> Account Number :</div>
                    <div class="mb-1 bg-indigo-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" x-model="billing.extra">
                        @if ($enrolment->payment_policy == 50)
                        Total Amount : {{$enrolment->program->fees/2}}
                        @else
                        Total Amount : {{$enrolment->program->fees}}
                        @endif
                    </div>
                </div>
                <div class="w-full md:w-1/3 mb-2 md:mb-0">
                    <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Contact:</label>
                    <div class="mb-1 bg-indigo-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" x-model="billing.name">T.p : 076-9226409</div>
                    <div class="mb-1 bg-indigo-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" x-model="billing.address"> E-mail: zencemarteducation@gmail.com</div>
                    <div class="mb-1 bg-indigo-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" x-model="billing.extra">Facebook :</div>
                </div>
            </div>
            <hr>

            <x-auth-session-status class="mb-4" :status="session('status')" />
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form action="{{route('bank.payment.success',$enrolment)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex m-6 mb-8 lg:w-2/4 justify-between">
                    <div class="">
                        <div class="mb-2 md:mb-1 md:flex items-center">
                            <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Invoice No.</label>
                            <span class="mr-4 md:block">:</span>
                            <div class="flex-1">
                                <input type="text" name="invoice_no" value="" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-64 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                            </div>
                        </div>

                        <div class="mb-2 md:mb-1 md:flex items-center">
                            <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Invoice Date</label>
                            <span class="mr-4 md:block">:</span>
                            <div class="flex-1">
                                <input type="datetime-local" name="invoice_date" value="" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-64 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                            </div>
                        </div>

                        <div class="mb-2 md:mb-1 md:flex items-center">
                            <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Total Amount</label>
                            <span class="mr-4 md:block">:</span>
                            <div class="flex-1">
                                <input type="text" name="amount" value="@if ($enrolment->payment_policy == 50) {{$enrolment->program->fees/2}}
                        @else {{$enrolment->program->fees}} @endif" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-64 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="w-32 h-32 mb-1 border rounded-lg overflow-hidden relative bg-gray-100">
                            <img id="image" class="object-cover w-full h-32" src="https://placehold.co/300x300/e2e8f0/e2e8f0" />

                            <div class="absolute top-0 left-0 right-0 bottom-0 w-full  cursor-pointer flex items-center justify-center" onClick="document.getElementById('fileInput').click()">
                                <button type="button" style="background-color: rgba(255, 255, 255, 0.65)" class="hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 text-sm border border-gray-300 rounded-lg shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-camera" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                        <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                        <circle cx="12" cy="13" r="3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        Cash Deposit <br> Receipt
                        <input name="receipt" id="fileInput" accept="image/*" class="hidden" type="file" onChange="let file = this.files[0];
					var reader = new FileReader();

					reader.onload = function (e) {
						document.getElementById('image').src = e.target.result;
						document.getElementById('image2').src = e.target.result;
					};

					reader.readAsDataURL(file);">
                    </div>
                </div>
                <div class="m-6">
                    <x-success-button class="text-md text-center">
                        {{ __('Submit') }}
                    </x-success-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
