<?php

namespace App\Http\Controllers;

use App\Http\Requests\BankPaymentRequest;
use App\Http\Requests\BankPaymentViewRequest;
use App\Models\Enrolment;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class BankPaymentController extends Controller
{
    public function show(BankPaymentViewRequest $request, Enrolment $enrolment)
    {
        return view('payhere.bank-payment')
            ->with([
                'enrolment' => $enrolment,
            ]);
    }

    public function success(BankPaymentRequest $request, Enrolment $enrolment)
    {
        dd($request);
    }

    private function storeFile(Program $program, UploadedFile $file = null)
    {
        if ($file != null) {
            $filename = $program->id . '.' . $file->getClientOriginalExtension();
            $file->move('storage/class_image/', $filename);
            $program->image = $filename;
            $program->save();
        }
    }
}
