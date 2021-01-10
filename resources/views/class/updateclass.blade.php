<x-app-layout>
    <div class="mt-10 pt-8 pb-8 bg-yellow-100">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="px-4  max-w-3xl mx-auto space-y-6">
            <form action="{{route('update.class',$program->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <x-label for="">Your Class Name</x-label>
                        <input type="text" value="{{$program->name}}" name="name" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                    </div>
                    <div class="w-1/2">
                        <x-label for="">Select Grade/Year:</x-label>
                        <select class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" id="grade" name="grade" onchange="random_function3()" required>
                            <option selected value="{{$program->grade}}">{{$program->grade}}</option>
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
                            <option selected value="{{$program->language_id}}">{{$program->language->name}}</option>
                            @foreach($language as $med)
                            <option value="{{$med->id}}">{{$med->medium}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-1/2">
                        <x-label for="">Select Subject:</x-label>
                        <select id="subject_id" name="subject_id" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500" required>
                            <option selected value="{{$program->id}}">{{$program->subject_program->name}}</option>
                            @foreach($subject as $sub)
                            <option value="{{$sub->id}}">{{$sub->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <x-label class="">Class Image</x-label>
                        <input type="file" name="image" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-non focus:border-teal-500">
                    </div>
                </div>
                <x-success-button class="ml-3 mt-5">
                    {{ __('Update') }}
                </x-success-button>
            </form>
        </div>
    </div>
</x-app-layout>
