<x-admin>

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    <div class="mt-5 max-w-4xl p-6 mx-auto bg-gray-200 dark:bg-gray-800 rounded-md shadow-md">
        <h2 class="text-lg text-gray-700 dark:text-white font-semibold capitalize">Edit User -- {{$user->name}} </h2>

        <form action="{{route('update.user', $user->getRouteKey())}}" method="POST">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="name">Username</label>
                    <input id="name" name="name" type="text" value="{{$user->name}}" class="mt-2 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="email">Gender</label>
                    <input id="gender" name="gender" type="text" value="{{$user->gender}}" class="mt-2 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
            </div>
            @foreach($roles as $role)
            <div class="mt-5">
                <input type="checkbox" name="roles[]" value="{{ $role->id }}" @if($user->roles->pluck('id')->contains($role->id)) checked @endif >
                <label> {{ $role->name }} </label>
            </div>
            @endforeach
            <div class="justify-center mt-6">
                <a href="{{route('admin.dashboard')}}">
                    <x-warning-button type="button">
                        {{__('Go Back')}}
                    </x-warning-button>
                </a>
                <x-success-button>
                    {{__('Update Account Information')}}
                </x-success-button>
            </div>
        </form>
    </div>


    <div class="mt-5 max-w-4xl p-6 mx-auto bg-gray-200 dark:bg-gray-800 rounded-md shadow-md">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
            <form>
                @csrf
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="name">Phone</label>
                    <input id="name" name="name" type="text" value="{{$user->phone_number}}" class="mt-2 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
                <div class="justify-center mt-6">
                    <x-success-button>
                        {{__('Update Phone Number')}}
                    </x-success-button>
                </div>
            </form>
            <form>
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="email">Email Address</label>
                    <input id="email" name="email" type="email" value="{{$user->email}}" class="mt-2 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border border-gray-300 dark:border-gray-600 rounded py-2 px-4 block w-full focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                </div>
                <div class="justify-center mt-6">
                    <x-success-button>
                        {{__('Update Email Address')}}
                    </x-success-button>
                </div>
            </form>
        </div>
    </div>
</x-admin>
