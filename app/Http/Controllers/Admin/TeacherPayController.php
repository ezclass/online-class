<?php

namespace App\Http\Controllers\Admin;

use ApiChef\PayHere\Payment;
use ApiChef\PayHere\Subscription;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;
use App\Models\Program;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class TeacherPayController extends Controller
{
    public function __invoke(AdminSuperAdminRequest $request, User $user)
    {
        $startDate = Carbon::now();
        $firstDay = $startDate->firstOfMonth();
        $lastDay = $startDate->lastOfMonth();

        return view('admin.payment')
            ->with([
                'teacher' => $user,
                'payments' => Payment::query()
                    ->with(['payable.teacher', 'payer', 'payable.subject'])
                    ->whereBetween('updated_at', [
                        Carbon::createFromDate("$firstDay")->startOfMonth(),
                        Carbon::createFromDate("$lastDay")->endOfMonth()
                    ])
                    ->whereHas('payable', function (Builder $query) use ($user) {
                        $query->where('user_id', $user->id);
                    })
                    ->success()
                    ->orderBy('id', 'asc')
                    ->get(),
                'programs' => Program::query()
                    ->with(['enrolments', 'subject'])
                    ->where('user_id', $user->id)
                    ->get(),
            ]);
    }
}
