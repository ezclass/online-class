<form action="{{route('admin.dashboard')}}" method="GET">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
        <div>
            <x-label for="">Select Role</x-label>
            <select id="role" name="role" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="">All Role</option>
                @foreach($roles as $role)
                <option value="{{$role->getRouteKey()}}" @if($role->getRouteKey() == $selectedRoleId) selected @endif>{{$role->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="justify-center mt-6">
        <x-success-button class="ml-3 mt-5">
            {{ __('Submit') }}
        </x-success-button>
    </div>
</form>
