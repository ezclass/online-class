<?php

namespace App\Http\Controllers\Enroll;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnrolmentAcceptRequest;
use App\Models\Enrolment;

class EnrolmentAcceptController extends Controller
{
    public function __invoke(EnrolmentAcceptRequest $request, Enrolment $enrolment)
    {
        $enrolment->payment_date = $request->get('payment_date');
        $enrolment->payment_policy = $request->get('payment_policy');
        $enrolment->accepted_at = now();
        $enrolment->save();

        return redirect()
            ->back();
    }
}
