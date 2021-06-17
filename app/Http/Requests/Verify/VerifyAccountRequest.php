<?php

namespace App\Http\Requests\Verify;

use Illuminate\Foundation\Http\FormRequest;

class VerifyAccountRequest extends FormRequest
{
    public function authorize()
    {
        return $this->route('user')->id == $this->user()->id;
    }

    public function rules()
    {
        return [
            'photo' => 'required|mimes:jpeg,jpg',
            'dob' => 'required|date',
            'province' => 'required',
            'district' => 'required',
            'fb' => 'required|url',
            'school' => 'required',
            'nic' => 'max:12',
        ];
    }
}
