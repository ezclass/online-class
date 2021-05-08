<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankDetailRequest extends FormRequest
{
    public function authorize()
    {
        return $this->route('user')->id == $this->user()->id;
    }

    public function rules()
    {
        return [
            'account_name' => 'required',
            'account_number' => 'required|integer',
            'bank_name' => 'required',
            'branch' => 'required',
        ];
    }
}
