<?php

namespace App\Http\Controllers\Verify;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;
use App\Http\Requests\Verify\VerifyAccountRequest;
use App\Http\Requests\Verify\ViewVerifyAccountRequest;
use App\Models\User;
use App\Models\Verify;
use App\Notifications\VerifyAccount;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VerifyAccountController extends Controller
{
    public function view(ViewVerifyAccountRequest $request)
    {
        return view('verify.account-verify');
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
        $user->notify(new VerifyAccount($user));

        return redirect()
            ->back()
            ->with('success', 'Account verified successfully');
    }

    public function delete(AdminSuperAdminRequest $request, User $user)
    {
        Storage::disk('do')->delete('verify/' . $user->verify->photo);
        $user->verify_account = 0;
        $user->save();
        $user->verify->delete();

        return redirect()
            ->back()
            ->with('success', 'Account information has been deleted');
    }
}
