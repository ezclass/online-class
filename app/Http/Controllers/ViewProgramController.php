<?php

namespace App\Http\Controllers;

use App\Http\Requests\ViewProgramRequest;
use App\Models\Program;

class ViewProgramController extends Controller
{
    public function __invoke(Program $program, ViewProgramRequest $request)
    {
        $hasEnrolled = $program->hasEnrolled($request->user());
        return $program->name;
    }
}
