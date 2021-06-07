<div>
    <div class="mx-auto">
        <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 mt-6">
            @forelse ($documents as $document)
                <div class="md:items-center pt-10 md:pt-0">
                    <div class="bg-blue-100">
                        <div class="px-4 border-b border-gray-200">
                            <h2 class="text-xl font-semibold text-gray-600">{{ $document->title }}</h2>
                            @role('teacher')
                            <div>
                                <a href="{{ route('document.delete', $document) }}"
                                    class="deletebtn text-red-500 text-md font-semibold">Delete Video
                                </a>
                            </div>
                            @endrole
                        </div>
                        <div class="w-full p-3">
                            <x-embed-styles />
                            <x-embed url="{{ $document->youtube }}" />
                        </div>
                    </div>
                </div>
            @empty
                <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow"
                    role="alert">
                    <span class="block sm:inline text-yellow-700">Video not yet available</span>
                </div>
            @endforelse
        </div>
    </div>
    <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
        {{ $documents->links() }}
    </div>
</div>


<script type="text/javascript">
    var elems = document.getElementsByClassName('deletebtn');
    var confirmIt = function(e) {
        if (!confirm('Delete this?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
