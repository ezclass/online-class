<?php

namespace App\Http\Controllers\Navbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('navbar.faq');
    }
}
