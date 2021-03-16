<x-app-layout>

    <x-bg-layout>

        <h1 class="font-black uppercase text-3xl lg:text-5xl text-yellow-500 mb-10">Update Lesson</h1>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form action="{{route('lesson.update',$lesson->getRouteKey())}}" method="POST">
            @csrf
            <div class="mt-4">
                <x-label for="">Your Lesson Name</x-label>
                <x-input type="text" name="name" value="{{$lesson->name}}" class="block mt-1 w-full" required />
            </div>

            <div class="mt-4">
                <x-label for="">Start at</x-label>
                <x-input type="datetime-local" name="starts_at" value="{{$lesson->starts_at}}" class="block mt-1 w-full" required />
            </div>

            <div class="mt-4">
                <x-label for="">End at</x-label>
                <x-input type="datetime-local" name="ends_at" value="{{$lesson->ends_at}}" class="block mt-1 w-full" required />
            </div>

            <div class="mt-4">
                <x-label for="">Note</x-label>
                <x-input type="text" name="note" value="{{$lesson->note}}" class="block mt-1 w-full" />
            </div>

            <x-success-button class="mt-3 ml-3">
                {{ __('Update') }}
            </x-success-button>
        </form>

    </x-bg-layout>

</x-app-layout>
