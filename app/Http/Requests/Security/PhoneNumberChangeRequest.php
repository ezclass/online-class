<?php

namespace App\Http\Requests\Security;

use Illuminate\Foundation\Http\FormRequest;

class PhoneNumberChangeRequest extends FormRequest
{
    public function authorize()
    {
        return $this->route('user')->id == $this->user()->id;
    }

    public function rules()
    {
        return [
            'phone_number' => 'required|max:10|unique:users,phone_number|min:10',
        ];
    }
}
