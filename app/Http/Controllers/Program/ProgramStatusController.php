<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use App\Http\Requests\Program\ProgramStatusRequest;
use App\Models\Program;

class ProgramStatusController extends Controller
{
    public function publish(ProgramStatusRequest $request, Program $program)
    {
        $program->status = true;
        $program->save();


        return redirect()->back()
        ->with('success', 'Class publication successful');
    }

    public function unpublish(ProgramStatusRequest $request, Program $program)
    {
        $program->status = false;
        $program->save();

        return redirect()->back()
        ->with('success', 'Class unpublish Successful');
    }
}
