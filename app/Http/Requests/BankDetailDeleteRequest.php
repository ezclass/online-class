<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankDetailDeleteRequest extends FormRequest
{
    public function authorize()
    {
        return $this->route('bankDetail')->user_id == $this->user()->id;
    }

    public function rules()
    {
        return [];
    }
}
