<?php

namespace App\Http\Controllers\Navbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FetchAllTeachersController extends Controller
{
    public function __invoke()
    {
        return view('navbar.fetchteachers');
    }
}
