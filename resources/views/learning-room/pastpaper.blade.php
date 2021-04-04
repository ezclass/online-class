<x-learning-room :lesson="$lesson">

    @can('create',$lesson)
    <x-page-layout>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <x-alart />

        <span class="font-black text-xl  text-yellow-500 mb-10">Upload files</span>
        <span class="font-black text-xl  text-yellow-500 mb-10">( jpg, pdf, ppt, dox )</span>

        <x-file-upload :lesson="$lesson" />
    </x-page-layout>
    @endcan

    @foreach ( $documents as $document)
    <x-show-file :document="$document" />
    @endforeach

</x-learning-room>
