<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AllTeacherRequest;

class AllTeacherController extends Controller
{
    public function __invoke(AllTeacherRequest $request)
    {
        return view('admin.all-teacher');
    }
}
