<x-app-layout>
    <div class="pt-8 pb-8">
        <div class="px-4  max-w-3xl mx-auto space-y-6">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form action="{{route('avatar')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex">
                    <div class="w-full">
                        <x-label for="">Upload Avatar</x-label>
                        <x-input type="file" name="avatar" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" />
                    </div>
                </div>
                <x-success-button class="mt-2">
                    Upload
                </x-success-button>
            </form>
        </div>
    </div>

    <div class="mt-5 text-center">
        @if(Auth::user()->avatar)
        <img src="{{ asset('storage/avatar/'.Auth::user()->avatar)}}" width="200" height="200" class="inline-block rounded-full ring-2 ring-white">
        @endif
    </div>
</x-app-layout>
