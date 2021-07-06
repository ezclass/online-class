<x-admin>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Add Subjects
            </p>
            <div class="leading-loose">
                <form action="{{ route('add.subject') }}" method="POST" class="p-10 bg-white rounded shadow-xl">
                    @csrf
                    <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="si">Sinhala</label>
                        <input type="text" class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="si" name="si" rows="6" required="" placeholder="SI">
                    </div>

                    <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="en">English</label>
                        <input type="text" class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="en" name="en" rows="6" required="" placeholder="EN">
                    </div>
                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Add Grade
            </p>
            <div class="leading-loose">
                <form action="{{route('add.grade')}}" method="POST" class="p-10 bg-white rounded shadow-xl">
                    @csrf
                    <div class="">
                        <label class="block text-sm text-gray-600" for="name">Name</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" placeholder="Grade Name" aria-label="Name" required>
                    </div>
                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Subjects
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">id</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Update</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @forelse ($subjects as $subject)
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">{{ $subject->id }}</td>
                            <form action="{{ route('update.subject', $subject) }}" method="POST">
                                @csrf
                                <td class="w-1/3 text-left py-3 px-4">
                                    <input type="text" name="subject" value="{{ $subject->name }}">
                                </td>
                                <td class="w-1/3 text-left py-3 px-4">
                                    <button class="text-green-500 updatebtn">Update</button>
                                </td>
                            </form>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Grades
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">id</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">name</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">update</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @forelse ($grades as $grade)
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">{{ $grade->id }}</td>
                            <form action="{{ route('update.grade', $grade) }}" method="POST">
                                @csrf
                                <td class="w-1/3 text-left py-3 px-4">
                                    <input type="text" name="grade" value="{{ $grade->name }}">
                                </td>
                                <td class="w-1/3 text-left py-3 px-4">
                                    <button class="text-green-500 updategradebtn">Update</button>
                                </td>
                            </form>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var elems = document.getElementsByClassName('updatebtn');
        var confirmIt = function(e) {
            if (!confirm('Do you want to save this subject?')) e.preventDefault();
        };
        for (var i = 0, l = elems.length; i < l; i++) {
            elems[i].addEventListener('click', confirmIt, false);
        }

        var elems = document.getElementsByClassName('updategradebtn');
        var confirmIt = function(e) {
            if (!confirm('Do you want to save this Grade?')) e.preventDefault();
        };
        for (var i = 0, l = elems.length; i < l; i++) {
            elems[i].addEventListener('click', confirmIt, false);
        }
    </script>
</x-admin>
