<?php

namespace App\Http\Controllers;

use App\Http\Requests\BankPaymentRequest;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class BankPaymentController extends Controller
{
    public function show(Request $request, Program $program)
    {
        return view('payhere.bank-payment')
            ->with(['program' => $program]);
    }

    public function success(BankPaymentRequest $request, Program $program)
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
