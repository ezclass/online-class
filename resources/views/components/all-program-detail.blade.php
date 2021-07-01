<div class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Class ID
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Created At
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Subject
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    All Students
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Class Fees
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Publish/Unpublish
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Show Payer details
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Enrolled student detail
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Show program details
                                </th>
                                @role('super_admin')
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Delete Program
                                </th>
                                @endrole
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($programs as $program)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $program->id }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $program->created_at->isoFormat('MMM Do Y, h:mm a') }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $program->subject->name }}</p>
                                        ( {{ $program->class_type }} )
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $program->grade->name }}</p>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $program->enrolments->count('accepted_at', '<>', null) }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $program->fees }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        @if ($program->status == 0)
                                            <div>
                                                Publish Class
                                                <a href="{{ route('status.publish', $program) }}"
                                                    class="unpublishclass">
                                                    <span
                                                        class="ml-4 border rounded-full border-grey flex items-center w-12 justify-start">
                                                        <span
                                                            class="rounded-full border w-6 h-6 border-grey bg-red-500 shadow">
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>

                                        @else
                                            <div>
                                                Unpublish Class
                                                <a href="{{ route('status.unpublish', $program) }}"
                                                    class="publishclass">
                                                    <span
                                                        class="ml-4 border rounded-full border-grey flex items-center w-12 bg-green justify-end">
                                                        <span
                                                            class="rounded-full border w-6 h-6 border-grey bg-green-500 shadow">
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <a href="{{ route('payer.detail', $program) }}"
                                            class="whitespace-no-wrap text-green-500">Show Payer details</a>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <a href="{{ route('enrolled.student.detail', $program) }}"
                                            class="whitespace-no-wrap text-indigo-500">Enrolled student detail</a>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <a href="{{ route('program.detail', $program) }}"
                                            class="whitespace-no-wrap text-indigo-500">Show program details</a>
                                    </td>
                                    @role('super_admin')
                                    <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                        <a href="{{ route('delete.program', $program) }}"
                                            class="whitespace-no-wrap text-red-500 deleteclassbtn">Delete Program</a>
                                    </td>
                                    @endrole
                                </tr>
                            @empty
                                <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow"
                                    role="alert">
                                    <span class="block sm:inline"> Classes are not set yet </span>
                                </div>
                            @endforelse
                        </tbody>

                    </table>
                    <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var elems = document.getElementsByClassName('publishclass');
    var confirmIt = function(e) {
        if (!confirm('Do you want to unpublish this class?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }

    var elems = document.getElementsByClassName('unpublishclass');
    var confirmIt = function(e) {
        if (!confirm('Do you want to publish this class?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }

    var elems = document.getElementsByClassName('deleteclassbtn');
    var confirmIt = function(e) {
        if (!confirm('Delete this program')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }

</script>
