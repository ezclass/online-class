<?php

namespace App\Http\Controllers\Program;

use ApiChef\PayHere\Subscription;
use App\Http\Controllers\Controller;
use App\Http\Requests\Program\ProgramPaymentHistoryRequest;
use App\Models\Enrolment;
use App\Models\User;

class ProgramPaymentHistoryController extends Controller
{
    public function __invoke(ProgramPaymentHistoryRequest $request, Enrolment $enrolment, User $user)
    {
        return view('program.payment-history')
            ->with([
                'enrolment' => $enrolment,
                'student' => $user,
                'subscriptions' => Subscription::query()
                    ->hasVerified($user, $enrolment)
                    ->get(),
            ]);
    }
}
