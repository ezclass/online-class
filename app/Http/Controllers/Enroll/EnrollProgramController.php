<?php

namespace App\Http\Controllers\Enroll;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class EnrollProgramController extends Controller
{
    public function __invoke(Request $request, Program $program)
    {
        return view('pages.enroll-program')
            ->with([
                'program' => $program,
            ]);
    }
}
