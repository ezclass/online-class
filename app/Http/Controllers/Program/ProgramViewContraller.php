<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgramViewContraller extends Controller
{
    public function __invoke(Request $request)
    {
        return view('program.program')
            ->with([
                'programs' => Program::query()
                    ->with(['grade', 'subject', 'language', 'enrolments'])
                    ->where('user_id', Auth::user()->id)
                    ->get(),
            ]);
    }
}
