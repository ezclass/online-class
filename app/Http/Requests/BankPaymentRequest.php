<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankPaymentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'invoice_no' => 'required',
            'invoice_date' => 'required',
            'receipt' => 'required|image|mimes:png,jpg,jpeg|max:5120',
        ];
    }
}
