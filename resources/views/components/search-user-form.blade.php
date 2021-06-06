<form action="{{ route('all.user') }}" method="GET">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
        <div>
            <x-label for="">Select Role</x-label>
            <select id="role" name="role"
                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="">All Role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->getRouteKey() }}" @if ($role->getRouteKey() == $selectedRoleId) selected @endif>
                        {{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <div class="relative mt-6 max-w-lg mx-auto">
                <button type="submit" class="absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <input type="text" name="name" value="{{ request()->query('name') }}"
                    class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline"
                    placeholder="Search by name">
            </div>
        </div>
    </div>

    <div class="justify-center mt-6">
        <x-success-button class="ml-3 mt-5">
            {{ __('Submit') }}
        </x-success-button>
    </div>
</form>
