<?php

namespace App\Http\Controllers\Verify;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;
use App\Http\Requests\Verify\VerifyAccountRequest;
use App\Models\User;
use App\Models\Verify;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VerifyAccountController extends Controller
{
    public function view()
    {
        return view('verify.teacher-verify');
    }

    public function save(VerifyAccountRequest $request, User $user)
    {
        $verify = new Verify();
        $verify->dob = $request->get('dob');
        $verify->province = $request->get('province');
        $verify->district = $request->get('district');
        $verify->facebook = $request->get('fb');
        $verify->school = $request->get('school');
        $verify->user_id = Auth::user()->id;
        $verify->save();
        $this->storeFile($verify, $request->file('photo'));

        $user->verify_account = 2;
        $user->save();

        return redirect()
            ->back()
            ->with('success', 'The information you provided was successfully saved');
    }

    private function storeFile(Verify $verify, UploadedFile $file = null)
    {
        if ($file != null) {
            $filename = $verify->getRouteKey() . '.' . $file->getClientOriginalExtension();
            Storage::disk('do')->put('verify/' . $filename, file_get_contents(request()->file('photo')->getRealPath()), 'public');
            $verify->photo = $filename;
            $verify->save();
        }
    }

    public function verify(AdminSuperAdminRequest $request, User $user)
    {
        $user->verify_account = 1;
        $user->save();

        return redirect()
            ->back()
            ->with('success', 'Account verified successfully');
    }
}
