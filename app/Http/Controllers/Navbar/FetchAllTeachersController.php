<?php

namespace App\Http\Controllers\Navbar;

use App\Http\Controllers\Controller;
use App\Models\User;

class FetchAllTeachersController extends Controller
{
    public function __invoke()
    {
        $users = User::role('teacher')
            ->get();

        return view('navbar.fetchteachers')
            ->with(['teacher' => $users]);
    }
}
