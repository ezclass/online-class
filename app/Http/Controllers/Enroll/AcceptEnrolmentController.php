<?php

namespace App\Http\Controllers\Enroll;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeleteEnrollmentRequest;
use App\Http\Requests\EnrolmentAcceptRequest;
use App\Models\Enrolment;
use App\Notifications\AcceptEnrollmentRequest;

class AcceptEnrolmentController extends Controller
{
    public function accept(EnrolmentAcceptRequest $request, Enrolment $enrolment)
    {
        $enrolment->accept($request->get('payment_date'), $request->get('payment_policy'));
        $enrolment->student->notify(new AcceptEnrollmentRequest($enrolment));

        return redirect()
            ->back()
            ->with('success', 'Enrolment Accept Successful, To show you student details, go to, MyClass->StudentDetails this way');
    }

    public function delete(DeleteEnrollmentRequest $request, Enrolment $enrolment)
    {
        $enrolment->delete();

        return redirect()
            ->back()
            ->with('primary', 'Enrollment Request has been deleted.');
    }
}
