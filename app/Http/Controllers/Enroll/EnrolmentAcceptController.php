<?php

namespace App\Http\Controllers\Enroll;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnrolmentAcceptRequest;
use App\Models\Enrolment;

class EnrolmentAcceptController extends Controller
{
    public function __invoke(EnrolmentAcceptRequest $request, Enrolment $enrolment)
    {
        $enrolment->payment_date_id = $request->get('payment_date_id');
        $enrolment->payment_policy_id = $request->get('payment_policy_id');
        $enrolment->accepted_at = now();
        $enrolment->save();

        return redirect()
            ->back()
            ->with('success', 'Request Accept Success');
    }
}
