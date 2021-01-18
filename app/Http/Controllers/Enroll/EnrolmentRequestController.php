<?php

namespace App\Http\Controllers\Enroll;

use ApiChef\Obfuscate\Support\Facades\Obfuscate;
use App\Http\Controllers\Controller;
use App\Http\Requests\EnrolmentRequest;
use App\Models\Enrolment;
use Illuminate\Support\Facades\Auth;

class EnrolmentRequestController extends Controller
{
    public function __invoke(EnrolmentRequest $request, Enrolment $enrolment)
    {
        $program_id = Obfuscate::decode($request->get('program_id'));
        $enrol = new Enrolment();
        $enrol->user_id = Auth::user()->id;
        $enrol->program_id = $program_id;
        $enrol->save();
    }
}
