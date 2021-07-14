<x-app-layout>

    <x-profile-heder />

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <x-student-dashboard-navigation />

    <div class="dark:bg-gray-900 py-6 flex flex-col justify-center sm:py-12">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 px-4">
            @forelse ($teachers as $teacher)
            <div class="bg-gray-100 border-indigo-600 dark:bg-gray-800 bg-opacity-95 border-opacity-60 | p-4 border-solid rounded-3xl border-2 | justify-around cursor-pointer | hover:bg-indigo-200 dark:hover:bg-indigo-600 hover:border-transparent | transition-colors duration-500">
                <a href="{{ route('public.dashboard', $teacher->getRouteKey()) }}">
                    <img class="inline-block h-14 w-14 rounded-full ring-2 ring-white" src="{{Storage::disk('do')->url('avatar/'.$teacher->avatar)}}" alt="" />
                    <div class="flex flex-col justify-center">
                        <p class="mt-2 text-gray-900 dark:text-gray-300 font-semibold hover:underline">{{$teacher->name}}</p>
                        <p class="text-black dark:text-gray-100 text-justify font-semibold">{{$teacher->getRouteKey()}}</p>
                    </div>
                </a>
                <form action="{{route('save.ranking', Auth::user())}}" method="POST">
                    @csrf
                    <input type="hidden" name="rank_user" value="{{$teacher->getRouteKey()}}">
                    <button class="mt-3 text-blue-400 mr-3 inline-flex items-center leading-none text-md pr-3 py-1 border-r-2 border-blue-200  px-3 font-semibold  bg-blue-100 hover:bg-yellow-200 rounded-full">
                        Rank Me
                    </button>
                </form>
            </div>
            @empty
            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                <strong class="font-bold">oops!</strong>
                <span class="block sm:inline">No teachers yet. coming soon!</span>
            </div>
            @endforelse
        </div>
    </div>

</x-app-layout>
