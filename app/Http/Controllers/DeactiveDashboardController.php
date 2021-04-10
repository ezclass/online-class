<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeactiveDashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('dashboard.deactive');
    }
}
