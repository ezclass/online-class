<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use App\Http\Requests\Security\PhoneNumberChangeRequest;
use App\Models\User;
use Illuminate\Http\Request;

class PhoneNumberVerificationController extends Controller
{
    public function view(Request $request)
    {
        return view('Security.phone-number-verification');
    }

    public function change(PhoneNumberChangeRequest $request, User $user)
    {
        $user->phone_number_verified_at = null;
        $user->phone_number = $request->get('phone_number');
        $user->save();

        return redirect()->back()
            ->with('success', 'The phone number changed the success');
    }
}
