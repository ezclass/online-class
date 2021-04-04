<?php

namespace App\Http\Controllers\Enroll;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlockRequest;
use App\Models\Enrolment;

class BlockController extends Controller
{
    public function __invoke(BlockRequest $request, Enrolment $enrolment)
    {
        $enrolment->active = 0;
        $enrolment->save();

        return redirect()->route('student.detail', $enrolment->program)
            ->with('warning', 'Student has been Blocked');
    }
}
