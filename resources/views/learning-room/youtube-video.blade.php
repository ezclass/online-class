<x-learning-room :lesson="$lesson">

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <x-document-navigation :lesson="$lesson" />

    @can('create', $lesson)
        <x-youtube-video-upload :lesson="$lesson" />
    @endcan

    <x-show-youtube-video :documents="$documents" />

</x-learning-room>
