<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankDetailRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'account_number' => 'required|integer',
            'bank_name' => 'required',
            'branch' => 'required',
        ];
    }
}
