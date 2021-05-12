<?php

namespace App\Http\Controllers\Program;

use ApiChef\PayHere\Payment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Program\ProgramPaymentHistoryRequest;
use App\Models\Enrolment;
use App\Models\User;

class ProgramPaymentHistoryController extends Controller
{
    public function __invoke(ProgramPaymentHistoryRequest $request, Enrolment $enrolment, User $user)
    {
        return view('program.payment-history')
            ->with(['student', 'program.subject', 'program.teacher'])
            ->with([
                'enrolment' => $enrolment,
                'student' => $user,
                'payments' => Payment::query()
                    ->where('payable_id', $enrolment->program_id)
                    ->paidBy($user)
                    ->success()
                    ->get(),
            ]);
    }
}
