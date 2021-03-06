<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    public function authorize()
    {
        return $this->route('user')->id == $this->user()->id;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'gender' => 'required',
            'experience' => 'max:255',
            'education' => 'max:255',
        ];
    }
}
