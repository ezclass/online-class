<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingViewController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('setting.setting');
    }
}
