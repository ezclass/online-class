<?php

namespace App\Http\Controllers\Navbar;

use App\Http\Controllers\Controller;
use App\Models\Program;

class FetchAllClassesController extends Controller
{
    public function __invoke()
    {
        $program = Program::query()
            ->with(['users'])
            ->paginate(10);

        return view('navbar.fatchclasses')
            ->with(['program' => $program]);
    }
}
