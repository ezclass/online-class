<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateProgramViewContraller extends Controller
{
    public function __invoke(Request $request)
    {
        return view('program.create-program');
    }
}
