<x-guest-layout>
    <p>
        <iframe src="{{Storage::disk('do')->url('document/'. $document->file)}}" class="h-screen w-screen" frameborder="2"></iframe>
    </p>
</x-guest-layout>
