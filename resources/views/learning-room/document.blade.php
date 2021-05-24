<x-learning-room :lesson="$lesson">

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    @can('create',$lesson)
    <span class="font-black text-md  text-yellow-500 mb-10">Upload files</span>
    <span class="font-black text-sm  text-yellow-500 mb-10">( png, jpg, jpeg, pdf, docx, ppt, mkv, mp4, zip, txt )</span>
    <x-file-upload :lesson="$lesson" />
    @endcan

    <x-show-document :documents="$documents" />

</x-learning-room>
