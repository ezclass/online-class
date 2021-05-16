@auth
@if (Auth::user()->unreadnotifications->count())
<div>
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700
                                hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition
                                duration-150 ease-in-out">
                <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <div class="absolute right-0 p-1 bg-red-400 rounded-full animate-ping"></div>
                <div class="absolute right-0 p-1 bg-red-400 border rounded-full"></div>
                <div class="mr-3 text-red-500">{{Auth::user()->unreadnotifications->count()}}</div>
            </button>
        </x-slot>

        <x-slot name="content">
            <div class="p-4 font-medium border-b">
                <span class="text-gray-800">Notification</span>
            </div>
            <ul class="flex flex-col p-2 my-2 space-y-1">
                <li>
                    <a href="{{route('mark.as.read')}}" class="text-green-500 block px-2 py-1 transition rounded-md hover:bg-green-100">Mark All as Read</a>
                </li>
                <div class="mt-3">
                    @forelse ( Auth::user()->unreadnotifications as $notification )
                    <li>
                        <span class="block text-gray-600 px-2 py-1 transition rounded-md cursor-pointer hover:bg-gray-200">{{$notification->data['data']}}</span>
                    </li>
                    <li>
                        <span class="text-gray-400">{{$notification->created_at->format('d M, h:m a')}}</span>
                    </li>
                    <hr>
                    @empty

                    @endforelse
                </div>
            </ul>
        </x-slot>
    </x-dropdown>
</div>
@endif
@endauth
