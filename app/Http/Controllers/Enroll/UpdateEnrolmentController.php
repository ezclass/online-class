<?php

namespace App\Http\Controllers\Enroll;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnrolmentAcceptRequest;
use App\Models\Enrolment;

class UpdateEnrolmentController extends Controller
{
    public function __invoke(EnrolmentAcceptRequest $request, Enrolment $enrolment)
    {
        $enrolment->updateEnrolment($request->get('payment_date'), $request->get('payment_policy'));

        return redirect()->route('student.detail', $enrolment->program)
            ->with('success', 'Enrolment Update Successful');
    }
}
