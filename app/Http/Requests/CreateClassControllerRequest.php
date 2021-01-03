<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClassControllerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'grade' => 'required',
            'image' => 'required',
            'subject_id' => 'required',
            'meadium_id' => 'required',
            'teacher_id' => 'required',
        ];
    }
}
