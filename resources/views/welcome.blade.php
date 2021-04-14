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
    <img src="{{ Storage::disk('do')->url('class/b.png') }}" alt="">

    <x-footer />

</x-app-layout>
