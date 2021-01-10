<x-app-layout>

    @role('teacher')
    <div class="mt-10 pt-8 pb-8 bg-yellow-100">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="px-4  max-w-3xl mx-auto space-y-6">
            <form action="{{route('create.class')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="user_id" value="{{Auth::User()->id}}">

                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <x-label for="">Your Class Name</x-label>
                        <input type="text" name="name" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" placeholder="Your Class Name" required>
                    </div>
                    <div class="w-1/2">
                        <x-label for="">Select Grade/Year:</x-label>
                        <select class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" id="grade" name="grade" onchange="random_function3()" required>
                            <option selected disabled>Select Grade/Year</option>
                            <option value="Grade 1">Grade 1</option>
                            <option value="Grade 2">Grade 2</option>
                            <option value="Grade 3">Grade 3</option>
                            <option value="Grade 4">Grade 4</option>
                            <option value="Grade 5">Grade 5</option>
                            <option value="Grade 6">Grade 6</option>
                            <option value="Grade 7">Grade 7</option>
                            <option value="Grade 8">Grade 8</option>
                            <option value="Grade 9">Grade 9</option>
                            <option value="Grade 10">Grade 10</option>
                            <option value="Grade 11">Grade 11</option>
                            <option value="Grade 12">Grade 12</option>
                            <option value="Grade 13">Grade 13</option>
                        </select>
                    </div>

                </div>

                <div class="flex space-x-4">
                    <div class="w-1/2 relative">
                        <x-label for="">Meadiam</x-label>
                        <select class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" id="language_id" name="language_id" onchange="random_function()" required>
                            <option selected disabled></option>
                            @foreach($language as $lan)
                            <option value="{{$lan->id}}">{{$lan->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-1/2">
                        <x-label for="">Select Subject:</x-label>
                        <select id="subject_id" name="subject_id" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                            <option selected disabled></option>
                            @foreach($subject as $sub)
                            <option value="{{$sub->id}}">{{$sub->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <x-label class="">Class Image</x-label>
                        <input type="file" name="image" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500 @error('class_image') is-invalid @enderror">
                    </div>
                </div>

                <x-success-button class="ml-3 mt-5">
                    {{ __('Create') }}
                </x-success-button>
            </form>
        </div>
    </div>
    @endrole

    @foreach($program as $class)
    <div class="hover:bg-gray-100 m-7 max-w-md mx-auto bg-white rounded-xl shadow-lg overflow-hidden md:max-w-2xl">
        <div class="sm:flex">
            <div class="md:flex-shrink-0">
                <img class="h-48 w-full object-cover md:w-48" src="{{ asset('storage/class_image/'.$class->image)}}" alt="Man looking at item at a store">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-lg text-indigo-500 font-semibold">{{ $class->name }}</div>
                <div class="block mt-1 text-lg leading-tight font-medium text-black">{{ $class->grade }}</div>
                <p class="mt-2 text-gray-500">{{ $class->subject_program->name }}</p>
                <p>{{ $class->language->name }}</p>
                <p>
                <div class="mt-2 flex space-x-4">
                    <a href="{{route('lesson')}}">
                        <x-primary-button>
                            Lesson
                        </x-primary-button>
                    </a>
                    <a href="{{route('update.class.view',$class->id)}}">
                        <x-success-button>
                            Update
                        </x-success-button>
                    </a>
                    <a href="{{route('delete.class', $class->id)}}">
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
