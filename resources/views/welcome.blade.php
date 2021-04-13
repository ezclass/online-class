<x-app-layout>

    <x-header />

    <x-service />

    <x-explain />
    <form method="post" action="/upload" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}

        Upload a file<br>
        <input type="file" name="image" />

        <p><button>Submit</button></p>
    </form>

    @forelse($files as $file)
    <li><a href="{{ Storage::disk('spaces')->url($file) }}">{{ Storage::disk('spaces')->url($file) }}</a></li>
    <img src="{{ Storage::disk('spaces')->url($file) }}" alt="">
    @empty
    <li><em>No files to display.</em></li>
    @endforelse

    <x-footer />

</x-app-layout>
