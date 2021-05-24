<x-learning-room :lesson="$lesson">

    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <x-alart />

    @can('create', $lesson)
    <x-meeting-provider />

    <div class=" flex items-center justify-center ">
        <div class="flex flex-col shadow-xl">
            <div class="py-6 px-14 bg-gradient-to-tr from-blue-500 to-blue-300 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
                <h2 class="text-white text-xs uppercase">Send the link to students to attend the meeting</h2>
            </div>
            <form action="{{route('meet.save',$lesson)}}" method="POST">
                @csrf
                <div class="flex flex-col py-6 px-8 space-y-5 bg-white">
                    <input type="text" name="link" placeholder="Enter your meeting Link" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    <input type="text" name="password" placeholder="Enter your meeting password" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    <button type="submit" class="w-full py-3 bg-blue-400 text-white rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-lg">
                        Send to Students
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endcan

    <x-meeting-link :meetings="$meetings" />

</x-learning-room>
