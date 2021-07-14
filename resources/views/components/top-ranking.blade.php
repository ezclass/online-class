<div class="text-center max-w-xl mx-auto">
    <h1 class="text-6xl md:text-5xl font-bold mb-5 text-gray-600">Top Ranking</h1>
    <h3 class="text-xl mb-5 font-light">Our congratulations to the top teachers</h3>
    <div class="text-center mb-10">
        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
        <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
    </div>
</div>

<div class="mb-8 flex items-center justify-center">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
        @forelse ($teachers as $teacher)
        <div class="flex items-center justify-center">
            <div class='relative bg-blue-500 text-white p-2 rounded text-2xl font-bold overflow-hidden'>
                <div class="ribbon bg-red-500 text-sm whitespace-no-wrap px-14">TOP</div>
                <div class="flex flex-col max-w-md bg-white px-8 py-6 rounded-xl space-y-5 items-center">
                    <img class="h-44 w-full rounded-md" src="{{ Storage::disk('do')->url('avatar/' . $teacher->avatar) }}" alt="motivation" />
                    <h3 class="h-20 font-serif font-bold text-gray-900 text-xl">{{$teacher->name}}</h3>
                    <a href="{{ route('public.dashboard', $teacher->getRouteKey()) }}" class="px-16 py-4 bg-gray-800 rounded-md text-white text-sm focus:border-transparent">
                        Show More
                    </a>
                </div>
            </div>
        </div>
        @empty
        @endforelse
    </div>
</div>

<style>
    .ribbon {
        position: absolute;
        top: 0;
        right: 0;
        width: 150px;
        height: 22px;
        margin-right: -50px;
        margin-top: 15px;
        -ms-transform: rotate(45deg);
        /* IE 9 */
        -webkit-transform: rotate(45deg);
        /* Safari prior 9.0 */
        transform: rotate(45deg);
        /* Standard syntax */
    }
</style>
