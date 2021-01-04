<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class FetchClassController extends Controller
{
    public function __invoke(Request $request, Program $program)
    {
        $program->load(['classes']);

        return view('dashboard')
            ->with(['program' => $program]);
    }
}
