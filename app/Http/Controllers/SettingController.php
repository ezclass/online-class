<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function view(Request $request)
    {
        return view('setting.user-setting');
    }
}
