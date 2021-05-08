<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeacherPayRequest;

class TeacherPayController extends Controller
{
    public function __invoke(TeacherPayRequest $request)
    {
        return view('admin.payment');
    }
}
