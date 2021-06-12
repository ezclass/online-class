<?php

namespace App\Http\Requests\Payment;

use Illuminate\Foundation\Http\FormRequest;

class BankPaymentRequest extends FormRequest
{
    public function authorize()
    {
        return $this->route('enrolment')->user_id == $this->user()->id;
    }

    public function rules()
    {
        return [
            'address' => 'required',
            'city' => 'required',
            'paid_date' => 'required',
            'receipt' => 'required|mimes:jpg,jpeg',
        ];
    }
}
