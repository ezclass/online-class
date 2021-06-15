@if ($program->video == null)
<div class="text-center bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow"
    role="alert">
    <span class="block sm:inline text-yellow-700">
        To help students understand about you, upload a video you created to YouTube, copy that link, and paste it
        into the box below.
    </span>
</div>
<div class="m-10 text-center">
    <form action="{{ route('save.program.video', $program->getRouteKey()) }}" method="POST">
        @csrf
        <input type="text" id="video" :value="old('video')" name="video"
            class="rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white"
            placeholder="Youtube video Link" />
        <button
            class="px-8 rounded-r-lg bg-yellow-400  text-gray-800 font-bold p-4 uppercase border-yellow-500 border-t border-b border-r">Submit</button>
    </form>
</div>
@endif

@if ($program->video !== null)
<div class="col-span-6">
    <div class="text-center bg-indigo-100 border border-indigo-400 text-indigo-700 p-3 rounded relative my-6 w-full shadow"
        role="alert">
        <span class="block sm:inline text-indigo-700">
            To help students understand you, update the video you created
        </span>
    </div>
    <div class="m-10 text-center">
        <form action="{{ route('save.program.video', $program->getRouteKey()) }}" method="POST">
            @csrf
            <input type="text" id="trailer" :value="old('trailer')" name="trailer"
                class="rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white"
                placeholder="Youtube Trailer video Link" />
            <button
                class="px-8 rounded-r-lg bg-yellow-400  text-gray-800 font-bold p-4 uppercase border-yellow-500 border-t border-b border-r">Submit</button>
        </form>
    </div>
</div>

<div class="m-10">
    <a href="{{ route('delete.program.video', $program->getRouteKey()) }}" class="text-red-500 text-md deletelink">
        Delete Link
    </a>
</div>
@endif

@if ($program->video)
    <!-- overlay -->
    <div id="modal_overlay"
        class="absolute inset-0 bg-black bg-opacity-30 h-screen w-full flex justify-center items-start md:items-center pt-10 md:pt-0">

        <!-- modal -->
        <div id="modal"
            class="pacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-1/2 h-2/2 md:h-4/4 bg-white rounded shadow-lg duration-300">

            <!-- button close -->
            <button onclick="openModal(false)"
                class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
                &cross;
            </button>

            <!-- header -->
            <div class="px-4 py-3 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-600">{{ $program->subject->name }}</h2>
            </div>

            <!-- body -->
            <div class="w-full p-3">
                <x-embed-styles />
                <x-embed url="{{ $program->video }}" />
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

<script type="text/javascript">
    var elems = document.getElementsByClassName('deletelink');
    var confirmIt = function(e) {
        if (!confirm('Delete this link?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
