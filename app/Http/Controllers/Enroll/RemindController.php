<?php

namespace App\Http\Controllers\Enroll;

use App\Http\Controllers\Controller;
use App\Http\Requests\RemindRequest;
use App\Models\Enrolment;

class RemindController extends Controller
{
    public function __invoke(RemindRequest $request, Enrolment $enrolment)
    {
        $enrolment->remind($request->get('remind'));

        return redirect()->route('payment.detail', $enrolment->program)
            ->with('success', 'Remind Send Successful');
    }
}
