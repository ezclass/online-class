<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Models\User;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function view(Request $request)
    {
        return view('setting.user-setting');
    }

    public function save(SettingRequest $request, User $user)
    {
        $user->name = $request->get('name');
        $user->gender = $request->get('gender');
        $user->experience = $request->get('experience');
        $user->education = $request->get('education');
        $user->save();

        return redirect()->back()
            ->with('success', 'Account Detail successfuly update');
    }
}
