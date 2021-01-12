<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\AvatarControllerRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function __invoke(AvatarControllerRequest $request, User $user)
    {
        $this->storeFile($user, $request->file('avatar'));
        return redirect()->back()->with('error', 'image not uploaded');
    }

    private function storeFile(User $user, UploadedFile $file = null)
    {
        if ($file != null) {
            if (Auth::user()->avatar == 'avatar.jpg') {
            } else
                Storage::delete('/public/avatar/' . auth()->user()->avatar);
            $filename = Auth::user()->id . '.' . $file->getClientOriginalExtension();
            $file->move('storage/avatar/', $filename);
            auth()->user()->update(['avatar' => $filename]);
        }
    }
}
