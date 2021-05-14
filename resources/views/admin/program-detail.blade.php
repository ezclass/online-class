<x-admin>

    <div class="justify-center mt-6">
        <a href="{{route('teacher.pay', $program->teacher)}}">
            <x-warning-button type="button">
                {{__('Go Back')}}
            </x-warning-button>
        </a>
    </div>

    <div class="antialiased font-sans">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Lesson ID
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Created At
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Lesson Name
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Class Date
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Description
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Deleted At
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Show Meeting Detail
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($lessons as $lesson)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$lesson->id}}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$lesson->created_at->format('d M ,Y - h:m a')}}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$lesson->name}}</p>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$lesson->class_date->format('d M ,Y - h:m a')}}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$lesson->description}}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-red-500 whitespace-no-wrap">{{$lesson->deleted_at}}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <a href="{{route('meeting.detail',$lesson->getRouteKey())}}" class="whitespace-no-wrap text-indigo-500">Show Meeting Detail</a>
                                    </td>
                                </tr>
                                @empty
                                <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
                                    <span class="block sm:inline"> Classes are not set yet </span>
                                </div>
                                @endforelse
                            </tbody>

                        </table>
                        <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                            {{$lessons->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin>
