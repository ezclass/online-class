<div class="antialiased font-sans">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Enroll ID
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Enroll Request Date
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Accept Date
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Subject
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Teacher Name
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Payment Date
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Payment Policy
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Class Fees
                                </th>
                                @role('super_admin')
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Delete Program
                                </th>
                                @endrole
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($enrolments as $enrolment)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $enrolment->id }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $enrolment->created_at->isoFormat('MMM Do Y, h:mm a') }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        @if ($enrolment->accepted_at !== null)
                                        {{ $enrolment->accepted_at->isoFormat('MMM Do Y, h:mm a') }}
                                        @endif
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $enrolment->program->subject->name }}</p>
                                    ( {{ $enrolment->program->class_type }} )
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $enrolment->program->grade->name }}</p>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-indigo-500 whitespace-no-wrap">
                                        <a href="{{ route('teacher.pay', $enrolment->program->teacher) }}">{{ $enrolment->program->teacher->name }}</a>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    @if ($enrolment->accepted_at !== null)
                                    @if ($enrolment->payment_date == 1)
                                    <h6 class="mt-2 text-sm font-medium">Payment Date : <span class="text-indigo-700">Daily</span></h6>
                                    @elseif ($enrolment->payment_date == 7)
                                    <h6 class="mt-2 text-sm font-medium">Payment Date : <span class="text-indigo-700">{{ $enrolment->payment_date }} ( First Week )</span></h6>
                                    @elseif ($enrolment->payment_date == 14)
                                    <h6 class="mt-2 text-sm font-medium">Payment Date : <span class="text-indigo-700">{{ $enrolment->payment_date }} ( Second Week )</span></h6>
                                    @elseif ($enrolment->payment_date == 21)
                                    <h6 class="mt-2 text-sm font-medium">Payment Date : <span class="text-indigo-700">{{ $enrolment->payment_date }} ( Third Week )</span></h6>
                                    @else
                                    <h6 class="mt-2 text-sm font-medium">Payment Date : <span class="text-indigo-700">{{ $enrolment->payment_date }} ( Last Week )</span></h6>
                                    @endif
                                    @endif
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    @if ($enrolment->accepted_at !== null)
                                    @if ($enrolment->payment_policy == 0)
                                    <p class="text-gray-900 whitespace-no-wrap">Free Card</p>
                                    @elseif ($enrolment->payment_policy == 100)
                                    <p class="text-gray-900 whitespace-no-wrap"> Rs:{{ $enrolment->program->fees }}</p>
                                    @endif
                                    @endif
                                </td>
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $enrolment->program->fees }}</p>
                                </td>
                                @role('super_admin')
                                <td class="px-5 py-5 border-b border-gray-300 bg-white text-sm">
                                    <a href="{{ route('enroled.program.delete', $enrolment) }}" class="whitespace-no-wrap text-red-500 deleteclassbtn">Delete enrolment</a>
                                </td>
                                @endrole
                            </tr>
                            @empty
                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6  shadow" role="alert">
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
        if (!confirm('Delete this enrolment')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
