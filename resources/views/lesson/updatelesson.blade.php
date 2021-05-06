<x-app-layout>

    <x-bg-layout>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form action="{{route('lesson.update',$lesson->getRouteKey())}}" method="POST">
            @csrf
            <div class="mt-4">
                <x-label for="">Your Lesson Name</x-label>
                <x-input type="text" name="name" value="{{$lesson->name}}" class="block mt-1 w-full" required />
            </div>

            <div class="mt-4">
                <x-label for="">Class Date</x-label>
                <x-input type="date" name="class_date" value="{{$lesson->class_date}}" class="block mt-1 w-full" required />
            </div>

            <div class="mt-4">
                <x-label for="">Description</x-label>
                <x-input type="text" name="description" value="{{$lesson->description}}" class="block mt-1 w-full" />
            </div>

            <x-success-button class="mt-3 ml-3">
                {{ __('Update Lesson') }}
            </x-success-button>
        </form>

    </x-bg-layout>

</x-app-layout>
