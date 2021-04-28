<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherPaymentController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        return view('admin.payment')
            ->with([
                'teachers' => User::query()
                    ->get(),
            ]);
    }
}
