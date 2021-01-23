<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProgramRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('update', $this->route('program'));
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'grade_id' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:5120',
            'fees' => 'required',
            'subject_id' => 'required',
            'language_id' => 'required',
        ];
    }
}
