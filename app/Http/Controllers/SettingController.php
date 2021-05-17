<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvatarRequest;
use App\Http\Requests\Setting\ChangeEmailRequest;
use App\Http\Requests\SettingRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


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

    public function uploadavaratar(AvatarRequest $request, User $user)
    {
        $this->deleteOldImage();
        $this->storeFile($user, $request->file('avatar'));

        return redirect()->back()
            ->with('success', 'Image Upload Successfully!');
    }

    private function storeFile(User $user, UploadedFile $file = null)
    {
        if ($file != null) {
            $filename = $user->id . '.' . $file->getClientOriginalExtension();
            Storage::disk('do')->put('avatar/' . $filename, file_get_contents(request()->file('avatar')->getRealPath()), 'public');
            $user->avatar = $filename;
            $user->save();
        }
    }

    protected function deleteOldImage()
    {
        if (auth()->user()->avatar) {
            if (Auth::user()->avatar == 'avatar.jpg') {
            } else
                Storage::disk('do')->delete('avatar/' . auth()->user()->avatar);
        }
    }

    public function change(ChangeEmailRequest $request, User $user)
    {
        $user->email_verified_at = null;
        $user->email = $request->get('email');
        $user->save();

        return redirect()->back()
            ->with('success', 'Email change was successful.');
    }
}
