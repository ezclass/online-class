<?php

namespace App\Http\Requests\Verify;

use Illuminate\Foundation\Http\FormRequest;

class StudentVerifyAccountRequest extends FormRequest
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
            'school' => 'required',
            'nic' => 'max:12',
        ];
    }
}
