<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\SendOtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tzsk\Otp\Facades\Otp;

class OtpController extends Controller
{
    public function send(Request $request)
    {
        $otp = Otp::generate(md5(Auth::user()->email));
        $request->user()->notify(new SendOtp($otp));

        return redirect()->back()
            ->with('success', 'An SMS with your verification code was sent to your phone.');
    }

    public function verify(Request $request, User $user)
    {
        $valid = Otp::match($request->get('otp'), md5(Auth::user()->email));

        if ($valid == true) {
            $user->phone_number_verified_at = now();
            $user->save();

            return redirect()->route('dashboard')
                ->with('success', 'Phone number verification successful');
        }
        return redirect()->back()
            ->with('warning', 'OTP is invalid, please resend OTP');
    }
}
