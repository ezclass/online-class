<form action="{{ route('search.class') }}" method="GET">
    <div class="container mx-auto px-6 py-3">
        <div class="relative mt-6 max-w-lg mx-auto">
            <button type="submit" class="absolute inset-y-0 left-0 pl-3 pt-3 flex items-center">
                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <input type="text" name="name" value="{{ request()->query('name') }}"
                class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-indigo-300 focus:ring-indigo-200 focus:outline-none focus:shadow-outline"
                placeholder="Search by teacher name">
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
        <div>
            <x-label for="">Select Grade / Course</x-label>
            <select id="grade" name="grade"
                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="">Select Grade</option>
                @foreach ($grades as $grade)
                    <option value="{{ $grade->getRouteKey() }}" @if ($grade->getRouteKey() == $selectedGradeId) selected @endif>
                        {{ $grade->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <x-label for="">Select Subject</x-label>
            <select id="subject" name="subject"
                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="">Select Subject</option>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->getRouteKey() }}" @if ($subject->getRouteKey() == $selectedSubjectId) selected @endif>{{ $subject->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="justify-center mt-6">
        <x-success-button class="ml-3 mt-5">
            {{ __('Filter') }}
        </x-success-button>
    </div>
</form>
