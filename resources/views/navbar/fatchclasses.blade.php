<x-app-layout>
    @foreach($program as $class)
    <div class="hover:bg-gray-100 m-7 max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden md:max-w-2xl">
        <div class="sm:flex">
            <div class="md:flex-shrink-0">
                <img class="h-48 w-full object-cover md:w-48" src="{{$class->image}}" alt="Man looking at item at a store">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-lg text-indigo-500 font-semibold">{{ $class->name }}</div>
                <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{ $class->grade }}</a>
                <p class="mt-2 text-gray-500">{{ $class->subject }}</p>
                <p>{{ $class->medium }}</p>
                <p>{{ $class->users->name }}</p>
                <p></p>
            </div>
        </div>
    </div>
    @endforeach

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-6 mx-auto">
            {{ $program->links() }}
        </div>
    </section>
</x-app-layout>


