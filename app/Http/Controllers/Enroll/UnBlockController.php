<?php

namespace App\Http\Controllers\Enroll;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlockRequest;
use App\Models\Enrolment;

class UnBlockController extends Controller
{
    public function __invoke(BlockRequest $request, Enrolment $enrolment)
    {
        $enrolment->active = 1;
        $enrolment->save();

        return redirect()->route('student.detail', $enrolment->program)
            ->with('success', 'Student UnBlock Successful');
    }
}
