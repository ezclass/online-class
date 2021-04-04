<?php

namespace App\Http\Controllers\Enroll;

use App\Http\Controllers\Controller;
use App\Http\Requests\RemindCancelRequest;
use App\Models\Enrolment;

class RemindCancelController extends Controller
{
    public function __invoke(RemindCancelRequest $request, Enrolment $enrolment)
    {
        $enrolment->remind = null;
        $enrolment->save();

        return redirect()->route('student.detail', $enrolment->program)
            ->with('success', 'Remind Cancel Successful');
    }
}
