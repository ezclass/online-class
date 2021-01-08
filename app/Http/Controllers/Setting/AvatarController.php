<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\AvatarControllerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function uploadavaratar(AvatarControllerRequest $request)
    {
        if ($request->hasFile('avatar')) {
            $filename = $request->avatar->getClientOriginalName();
            $this->deleteOldImage();
            $request->avatar->storeAs('avatar', $filename, 'public');
            auth()->user()->update(['avatar' => $filename]);
            return redirect()->route('setting')->with('success', 'Image Upload Successfully!');
        }

        return redirect()->back()->with('error', 'image not uploaded');
    }

    protected function deleteOldImage()
    {
        if (auth()->user()->avatar) {
            if (Auth::user()->avatar == 'avatar.jpg') {
            } else
                Storage::delete('/public/avatar/' . auth()->user()->avatar);
        }
    }
}
