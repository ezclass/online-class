<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvatarControllerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'avatar' => 'required|image|mimes:png,jpg,jpeg|max:5120',
        ];
    }
}
