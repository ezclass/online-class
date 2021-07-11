<?php

namespace App\Http\Controllers\Verify;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;
use App\Http\Requests\Verify\StudentVerifyAccountRequest;
use App\Models\User;
use App\Models\Verify;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StudentVerifyAccountController extends Controller
{
    public function save(StudentVerifyAccountRequest $request, User $user)
    {
        $verify = new Verify();
        $verify->dob = $request->get('dob');
        $verify->province = $request->get('province');
        $verify->district = $request->get('district');
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
            Storage::disk('do')->put('student-verify/' . $filename, file_get_contents(request()->file('photo')->getRealPath()), 'public');
            $verify->photo = $filename;
            $verify->save();
        }
    }

    public function delete(AdminSuperAdminRequest $request, User $user)
    {
        Storage::disk('do')->delete('student-verify/' . $user->verify->photo);
        $user->verify_account = 0;
        $user->save();
        $user->verify->delete();

        return redirect()
            ->back()
            ->with('success', 'Account information has been deleted');
    }
}
