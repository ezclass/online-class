<x-learning-room :lesson="$lesson">

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    @can('create',$lesson)
    <x-file-upload :lesson="$lesson" />
    @endcan

    <x-show-document :documents="$documents" />

</x-learning-room>
