<?php

namespace App\Http\Controllers\Navbar;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class FetchAllClassesController extends Controller
{
    public function __invoke()
    {
        $program = Program::all();
        return view('navbar.fatchclasses')
            ->with(['program' => $program]);
    }
}
