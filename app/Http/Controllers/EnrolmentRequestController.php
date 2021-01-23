<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnrolmentRequest;
use App\Models\Enrolment;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class EnrolmentRequestController extends Controller
{
    public function __invoke(EnrolmentRequest $request, Enrolment $enrolment)
    {
        /** @var Program $program */
        $program = Program::forHash($request->get('program_id'))->firstOrFail();
        $program->enrollStudent(Auth::user());

        return redirect()->route('program.view', $request->get('program_id'));
    }
}
