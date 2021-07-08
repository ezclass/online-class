<x-guest-layout>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    @if (Auth::user()->verify_account == 0)
    <div>
        <div class="bg-blue-100 border text-center border-blue-400 text-blue-700 p-3 rounded relative my-6  shadow" role="alert">
            <span class="block sm:inline"> Fill out the form below to verify your identity </span>
        </div>

        <div class="flex items-center justify-center pt-5 pb-5">
            <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
                <div class="flex justify-center py-4">
                    <a href="{{ route('welcome') }}" class="flex bg-purple-200 rounded-full md:p-4 p-2 border-2 border-purple-300">
                        <img src="{{Storage::disk('do')->url('logo/logo.png')}}" alt="logo" class="mt-2 block h-8 w-auto fill-current text-gray-600">
                    </a>
                </div>

                <div class="flex justify-center">
                    <div class="flex">
                        <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Fill out this form</h1>
                    </div>
                </div>

                <form action="{{route('save.account.verify', Auth::user())}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class=" md:text-sm text-xs text-gray-500 text-light font-semibold">Facebook URL (Must be at least a year into the account) <span class="text-red-500">*</span></label>
                        <input name="fb" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Your FB URL" required />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                            <label class=" md:text-sm text-xs text-gray-500 text-light font-semibold">Date of Birth <span class="text-red-500">*</span></label>
                            <input name="dob" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="date" placeholder="DOB" required />
                        </div>
                        <div class="grid grid-cols-1">
                            <label class=" md:text-sm text-xs text-gray-500 text-light font-semibold">School <span class="text-red-500">*</span></label>
                            <input name="school" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="School" required />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class=" md:text-sm text-xs text-gray-500 text-light font-semibold">Select Province <span class="text-red-500">*</span></label>
                        <select name="province" id="Province" onchange="random_function2()" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" required>
                            <option selected disabled>Select Your Province</option>
                            <option value="Western Province">Western Province</option>
                            <option value="Central Province">Central Province</option>
                            <option value="Southern Province">Southern Province</option>
                            <option value="Uva Province">Uva Province</option>
                            <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                            <option value="North Western Province">North Western Province</option>
                            <option value="North Central Province">North Central Province</option>
                            <option value="Nothern Province">Nothern Province</option>
                            <option value="Eastern Province">Eastern Province</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class=" md:text-sm text-xs text-gray-500 text-light font-semibold">Select District <span class="text-red-500">*</span></label>
                        <select id="district" name="district" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" required>
                            <option selected disabled>Select Your District</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class=" md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload Your Photo <span class="text-red-500">*</span></label>
                        <div class='flex items-center justify-center w-full'>
                            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                <div class='flex flex-col items-center justify-center pt-7'>
                                    <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Select a photo (jpg, jpeg)</p>
                                </div>
                                <input name="photo" type='file' class="hidden" required />
                            </label>
                        </div>
                    </div>

                    <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                        <button class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            function random_function2() {
                var b = document.getElementById("Province").value;
                if (b === "Western Province") {
                    var dis = ["Select Your District", "Gampaha", "Colombo", "Kalutara"];
                } else if (b === "Central Province") {
                    var dis = ["Select Your District", "Matale", "Kandy", "Nuwara Eliya"];
                } else if (b === "Southern Province") {
                    var dis = ["Select Your District", "Hambantota", "Matara", "Galle"];
                } else if (b === "Uva Province") {
                    var dis = ["Select Your District", "Badulla", "Monaragala"];
                } else if (b === "Sabaragamuwa Province") {
                    var dis = ["Select Your District", "Kegalle", "Ratnapura"];
                } else if (b === "North Western Province") {
                    var dis = ["Select Your District", "Puttalam", "Kurunegala"];
                } else if (b === "North Central Province") {
                    var dis = ["Select Your District", "Anuradhapura", "Polonnaruwa"];
                } else if (b === "Nothern Province") {
                    var dis = ["Select Your District", "Jaffna", "Kilinochchi", "Mannar", "Mullaitivu", "Vavuniya"];
                } else if (b === "Eastern Province") {
                    var dis = ["Select Your District", "Trincomalee", "Batticaloa", "Ampara"];
                }

                var string = "";

                for (i = 0; i < dis.length; i++) {
                    string = string + "<option value=" + dis[i] + ">" + dis[i] + "</option>";
                }
                document.getElementById("district").innerHTML = string;
            }
        </script>
    </div>
    @else
    <div class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none">
        <div class="flex flex-col p-8 bg-white shadow-md hover:shodow-lg rounded-2xl">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 rounded-2xl p-3 border border-blue-100 text-blue-400 bg-blue-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div class="flex flex-col ml-3">
                        <p class="text-sm text-gray-600 leading-none mt-1">
                            Your account is being checked by admins. It will take about 12 hours from the time you provide the information to verify your account.
                        </p>
                    </div>
                </div>
                <a href="{{ route('welcome') }}" mat-icon-button="" class="flex-no-shrink bg-red-500 px-5 ml-4 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-red-500 text-white rounded-full">Back to Home</a>
            </div>
        </div>
    </div>
    @endif

    <x-messanger />
    <x-whatsapp />

</x-guest-layout>
