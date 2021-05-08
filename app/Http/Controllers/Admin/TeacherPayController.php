<?php

namespace App\Http\Controllers\Admin;

use ApiChef\PayHere\Subscription;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeacherPayRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class TeacherPayController extends Controller
{
    public function __invoke(TeacherPayRequest $request, User $user)
    {
        $startDate = Carbon::now();
        $firstDay = $startDate->firstOfMonth();
        $lastDay = $startDate->lastOfMonth();

        return view('admin.payment')
            ->with([
                'subscriptions' => Subscription::query()
                    ->with(['subscribable.teacher'])
                    ->whereHas('subscribable', function (Builder $query) use ($user) {
                        $query->where('user_id', $user->id);
                    })
                    ->whereBetween('updated_at', [
                        Carbon::createFromDate("$firstDay")->startOfMonth(),
                        Carbon::createFromDate("$lastDay")->endOfMonth()
                    ])
                    ->where('status', 2)
                    ->get()
            ]);
    }
}
