<x-app-layout>

    @role('teacher')
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="mt-10 pt-8 pb-8 bg-yellow-100">
        <div class="px-4  max-w-3xl mx-auto space-y-6">
            <form action="{{route('create.class')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="user_id" value="{{Auth::User()->id}}">

                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <x-label for="">Your Class Name</x-label>
                        <input type="text" name="name" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Your Class Name" required>
                    </div>

                    <div class="w-1/2 relative">
                        <x-label for="">Meadiam</x-label>
                        <select class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" id="meadiam" name="medium" onchange="random_function()" required>
                            <option selected disabled>Meadiam</option>
                            <option value="සිංහල මාධ්‍යය">සිංහල මාධ්‍යය</option>
                            <option value="English medium">English medium</option>
                        </select>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <x-label for="">You are</x-label>
                        <select class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" id="youare" name="" onchange="random_function1()" required>
                            <option selected disabled>You are</option>
                        </select>
                    </div>

                    <div class="w-1/2">
                        <x-label for="">Select Grade/Year:</x-label>
                        <select class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" id="grade" name="grade" onchange="random_function3()" required>
                            <option selected disabled>Select Grade/Year</option>
                        </select>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <x-label for="">Select Subject:</x-label>
                        <select id="subject" name="subject" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                            <option selected disabled>Select Subject</option>
                        </select>
                    </div>

                    <div class="w-1/2">
                        <x-label class="">Class Image</x-label>
                        <input type="file" name="image" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500 @error('class_image') is-invalid @enderror" required>
                    </div>
                </div>

                <x-success-button class="ml-3">
                    {{ __('Create') }}
                </x-success-button>
            </form>
        </div>
    </div>
    @endrole

    @foreach($program as $program)
    <div class="hover:bg-gray-100 m-7 max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden md:max-w-2xl">
        <div class="sm:flex">
            <div class="md:flex-shrink-0">
                <img class="h-48 w-full object-cover md:w-48" src="{{ asset('storage/class_image/'.$program->image)}}" alt="Man looking at item at a store">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-lg text-indigo-500 font-semibold">{{ $program->name }}</div>
                <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{ $program->grade }}</a>
                <p class="mt-2 text-gray-500">{{ $program->subject }}</p>
                <p>{{ $program->medium }}</p>
                <p>
                <div class="mt-2 flex space-x-4">
                    <a href="{{route('lesson')}}">
                        <x-primary-button>
                            Lesson
                        </x-primary-button>
                    </a>
                    <a href="{{route('update.class.view',$program->id)}}">
                        <x-success-button>
                            Update
                        </x-success-button>
                    </a>
                    <a href="{{route('delete.class', $program->id)}}">
                        <x-danger-button class="">
                            Delete
                        </x-danger-button>
                    </a>
                </div>
                </p>
            </div>
        </div>
    </div>
    @endforeach

</x-app-layout>
