<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class HomeClassController extends Controller
{
    public function index(Program $program)
    {
        $program = $program->all()
            ->where('teacher_id', Auth::user()->id);

        return view('dashboard')
            ->with(['program' => $program]);
    }
}
