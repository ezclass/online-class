<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpinionSaveRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'opinion' => 'required|min:50|max:255'
        ];
    }
}
