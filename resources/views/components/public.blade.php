<div>
    <div class="top h-64 w-full overflow-hidden relative">
        <img src="{{ Storage::disk('do')->url('dashboard/dashboard.jpg') }}" class="bg w-full h-full object-cover object-center absolute z-0">
    </div>
    <div class="px-6 md:px-32 flex justify-between lg:flex-row flex-col">
        <div class="flex lg:flex-row flex-col">
            <div class="">
                <img src="{{ Storage::disk('do')->url('avatar/' . $teacher->avatar) }}" alt="" class="w-36 h-36 bg-cover rounded-full bg-center absolute transform -translate-y-1/2 ring-4 ring-white">
            </div>
            <p class="lg:ml-36 mt-16 lg:mt-0 pl-4 text-3xl font-semibold py-5">
                {{ $teacher->name }}
            </p>
        </div>


        <div class="py-5 lg:space-x-3 space-y-3 lg:space-y-0">
            <div class="lg:w-auto inline-flex w-full font-semibold tracking-wide justify-center items-center text-gray-600 space-x-1.5 border border-red-400 focus:ring-1 focus:ring-gray-300 focus:ring-offset-2 hover:bg-gray-100 focus:outline-none px-4 py-2 text-sm rounded-lg">
                <span>
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">

                    </svg>
                </span>
                <span>
                    Reference Number : <span class="text-black">{{ $teacher->getRouteKey() }}</span>
                </span>
            </div>
            @role('student')
            <div class="lg:w-auto inline-flex w-full font-semibold tracking-wide justify-center items-center text-gray-600 space-x-1.5 border border-gray-400 focus:ring-1 focus:ring-gray-300 focus:ring-offset-2 hover:bg-gray-100 focus:outline-none px-4 py-2 text-sm rounded-lg">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm0 2.574l-12-9.725v15.438h24v-15.438l-12 9.725z" />
                    </svg>
                </span>
                <span>
                    {{ $teacher->email }}
                </span>
            </div>
            <div class="lg:w-auto inline-flex w-full font-semibold tracking-wide justify-center items-center text-gray-600 space-x-1.5 border border-gray-400 focus:ring-1 focus:ring-gray-300 focus:ring-offset-2 hover:bg-gray-100 focus:outline-none px-4 py-2 text-sm rounded-lg">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M18.48 22.926l-1.193.658c-6.979 3.621-19.082-17.494-12.279-21.484l1.145-.637 3.714 6.467-1.139.632c-2.067 1.245 2.76 9.707 4.879 8.545l1.162-.642 3.711 6.461zm-9.808-22.926l-1.68.975 3.714 6.466 1.681-.975-3.715-6.466zm8.613 14.997l-1.68.975 3.714 6.467 1.681-.975-3.715-6.467z" />
                    </svg>
                </span>
                <span>
                    {{ $teacher->phone_number }}
                </span>
            </div>
            @endrole
        </div>
    </div>
</div>

<div class="mt-4 bg-indigo-300 p-3 shadow-sm rounded-sm">
    <div class="grid lg:grid-cols-2">
        <div>
            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                <span clas="text-green-500">
                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </span>
                <span class="tracking-wide">Experience</span>
            </div>
            <ul class="list-inside space-y-2">
                <li>
                    <div class="text-teal-600">{{ $teacher->experience }}</div>
                </li>
            </ul>
        </div>
        <div>
            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                <span clas="text-green-500">
                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                </span>
                <span class="tracking-wide">Education</span>
            </div>
            <ul class="list-inside space-y-2">
                <li>
                    <div class="text-teal-600">{{ $teacher->education }}</div>
                </li>
            </ul>
        </div>
    </div>
</div>

@auth
@if ($teacher->id == Auth::user()->id and $teacher->trailer == null)
<div class="text-center bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
    <span class="block sm:inline text-yellow-700">
        To help students understand about you, upload a video you created to YouTube, copy that link, and paste it
        into the box below.
    </span>
</div>
<div class="m-10 text-center">
    <form action="{{ route('save.trailer', Auth::user()) }}" method="POST">
        @csrf
        <input type="text" id="trailer" :value="old('trailer')" name="trailer" class="rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white" placeholder="Youtube Trailer video Link" />
        <button class="px-8 rounded-r-lg bg-yellow-400  text-gray-800 font-bold p-4 uppercase border-yellow-500 border-t border-b border-r">Submit</button>
    </form>
</div>

<!-- overlay -->
<div id="modal_overlay" class="absolute inset-0 bg-black bg-opacity-30 h-screen w-full flex justify-center items-start md:items-center pt-10 md:pt-0">

    <!-- modal -->
    <div id="modal" class="pacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-1/2 h-2/2 md:h-4/4 bg-white rounded shadow-lg duration-300">

        <!-- button close -->
        <button onclick="openModal(false)" class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
            &cross;
        </button>

        <!-- header -->
        <div class="px-4 py-3 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-600">Video on adding trailer video</h2>
        </div>

        <!-- body -->
        <div class="w-full p-3">
            <x-embed-styles />
            <x-embed url="https://youtu.be/WDVfPrhpYRI" />
        </div>
    </div>
</div>

<script>
    const modal_overlay = document.querySelector('#modal_overlay');
    const modal = document.querySelector('#modal');

    function openModal(value) {
        const modalCl = modal.classList
        const overlayCl = modal_overlay

        if (value) {
            overlayCl.classList.remove('hidden')
            setTimeout(() => {
                modalCl.remove('opacity-0')
                modalCl.remove('-translate-y-full')
                modalCl.remove('scale-150')
            }, 100);
        } else {
            modalCl.add('-translate-y-full')
            setTimeout(() => {
                modalCl.add('opacity-0')
                modalCl.add('scale-150')
            }, 100);
            setTimeout(() => overlayCl.classList.add('hidden'), 300);
        }
    }
    openModal(true)
</script>

@endif
@endauth

<div class="container mx-auto p-5">
    <div class="my-4 lg:mt-0 md:mt-0"></div>
    <div class="holder mx-auto w-11/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
        @forelse($programs as $program)
        <x-program-card :program="$program" />
        @empty
        @role('teacher')
        <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
            <span class="block sm:inline text-yellow-700">No classes yet, Click <a href="{{ route('create.program.viwe') }}"><u>Create a new class</u></a>
            </span>
        </div>
        @endrole
        @role('student')
        <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
            <span class="block sm:inline text-yellow-700">No classes yet</span>
        </div>
        @endrole
        @endforelse
    </div>
</div>


@if ($teacher->trailer)
<!-- overlay -->
<div id="modal_overlay" class="absolute inset-0 bg-black bg-opacity-30 h-screen w-full flex justify-center items-start md:items-center pt-10 md:pt-0">

    <!-- modal -->
    <div id="modal" class="pacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-1/2 h-2/2 md:h-4/4 bg-white rounded shadow-lg duration-300">

        <!-- button close -->
        <button onclick="openModal(false)" class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
            &cross;
        </button>

        <!-- header -->
        <div class="px-4 py-3 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-600">{{ $teacher->name }}</h2>
        </div>

        <!-- body -->
        <div class="w-full p-3">
            <x-embed-styles />
            <x-embed url="{{ $teacher->trailer }}" />
        </div>
    </div>
</div>

<script>
    const modal_overlay = document.querySelector('#modal_overlay');
    const modal = document.querySelector('#modal');

    function openModal(value) {
        const modalCl = modal.classList
        const overlayCl = modal_overlay

        if (value) {
            overlayCl.classList.remove('hidden')
            setTimeout(() => {
                modalCl.remove('opacity-0')
                modalCl.remove('-translate-y-full')
                modalCl.remove('scale-150')
            }, 100);
        } else {
            modalCl.add('-translate-y-full')
            setTimeout(() => {
                modalCl.add('opacity-0')
                modalCl.add('scale-150')
            }, 100);
            setTimeout(() => overlayCl.classList.add('hidden'), 300);
        }
    }
    openModal(true)
</script>
@endif
