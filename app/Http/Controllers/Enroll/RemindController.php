<?php

namespace App\Http\Controllers\Enroll;

use App\Http\Controllers\Controller;
use App\Http\Requests\RemindRequest;
use App\Models\Enrolment;
use App\Notifications\Reminder;

class RemindController extends Controller
{
    public function __invoke(RemindRequest $request, Enrolment $enrolment)
    {
        $enrolment->remind($request->get('remind'));
        $enrolment->student->notify(new Reminder($enrolment));

        return redirect()->route('student.detail', $enrolment->program)
            ->with('success', 'Remind Send Successful');
    }
}
