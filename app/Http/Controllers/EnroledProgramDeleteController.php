<?php

namespace App\Http\Controllers;

use App\Http\Requests\Program\EnroledProgramDeleteRequest;
use App\Models\Enrolment;

class EnroledProgramDeleteController extends Controller
{
    public function __invoke(EnroledProgramDeleteRequest $request, Enrolment $enrolment)
    {
        $enrolment->delete();
        return redirect()
            ->back();
    }
}
