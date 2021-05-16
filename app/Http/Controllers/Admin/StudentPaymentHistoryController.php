<?php

namespace App\Http\Controllers\Admin;

use ApiChef\PayHere\Payment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;
use App\Models\Enrolment;
use App\Models\User;

class StudentPaymentHistoryController extends Controller
{
    public function __invoke(AdminSuperAdminRequest $request, Enrolment $enrolment, User $user)
    {
        return view('admin.student-payment-history')
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
