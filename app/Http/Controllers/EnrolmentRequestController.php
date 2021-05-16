<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnrolmentRequest;
use App\Models\Program;
use App\Notifications\EnrollmentRequest;
use Illuminate\Support\Facades\Auth;

class EnrolmentRequestController extends Controller
{
    public function __invoke(EnrolmentRequest $request)
    {
        /** @var Program $program */
        $program = Program::forHash($request->get('program_id'))->firstOrFail();
        $program->enrollStudent(Auth::user());
        $program->teacher->notify(new EnrollmentRequest($program));

        return redirect()
            ->back()
            ->with('success', 'Enroll request sent, Please check your dashboard.');
    }
}
