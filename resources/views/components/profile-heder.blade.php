<div class="top h-64 w-full bg-blue-600 overflow-hidden relative">
    <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
        <img src="{{ asset('storage/avatar/'. Auth::user()->avatar )}}" class="h-24 w-24 object-cover rounded-full">
        <h1 class="text-2xl font-semibold">{{Auth::user()->name}}</h1>
    </div>
</div>
