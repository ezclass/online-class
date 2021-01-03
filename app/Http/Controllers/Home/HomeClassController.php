<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeClassController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
