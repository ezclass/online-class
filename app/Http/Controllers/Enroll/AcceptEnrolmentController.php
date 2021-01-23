<?php

namespace App\Http\Controllers\Enroll;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnrolmentAcceptRequest;
use App\Models\Enrolment;

class AcceptEnrolmentController extends Controller
{
    public function __invoke(EnrolmentAcceptRequest $request, Enrolment $enrolment)
    {
        $enrolment->accept($request->get('payment_date'), $request->get('payment_policy'));

        return redirect()->back();
    }
}
