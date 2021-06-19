<x-learning-room :lesson="$lesson">

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <x-document-navigation :lesson="$lesson" />

    @can('create', $lesson)
        <x-cloud-document :lesson="$lesson" />
    @endcan

    <x-show-cloud-document :documents="$documents" />

</x-learning-room>
