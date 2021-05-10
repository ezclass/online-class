<div class="min-w-screen min-h-screen bg-gray-50 flex items-center justify-center py-5">
    <div class="w-full bg-white border-t border-b border-gray-200 px-5 py-16 md:py-24 text-gray-800">
        <div class="w-full max-w-6xl mx-auto">
            <div class="text-center max-w-xl mx-auto">
                <h1 class="text-6xl md:text-7xl font-bold mb-5 text-gray-600">Clients' opinions <br>about us</h1>
                <h3 class="text-xl mb-5 font-light">Thank you so much for your comments on Homeclas.lk</h3>
                <div class="text-center mb-10">
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                </div>
            </div>

            <div class="holder mx-auto w-11/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3">
                @forelse ($opinions as $opinion)
                <div class="ml-2 mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                    <div class="w-full flex mb-4 items-center">
                        <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                            <img src="{{ Storage::disk('do')->url('avatar/'. $opinion->client->avatar )}}" alt="">
                        </div>
                        <div class="flex-grow pl-3">
                            <h6 class="font-bold text-sm uppercase text-gray-600">{{$opinion->client->name}}</h6>
                        </div>
                    </div>
                    <div class="w-full">
                        <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>
                            {{$opinion->opinion}}
                            <span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span>
                        </p>
                    </div>
                </div>
                @empty

                @endforelse

            </div>
        </div>
    </div>
</div>
