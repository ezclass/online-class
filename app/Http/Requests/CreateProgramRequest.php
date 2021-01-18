<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class CreateProgramRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_TEACHER);
    }

    public function rules()
    {
        return [
            'name' => 'required|max:20',
            'grade_id' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5120',
            'fees' => 'required',
            'language_id' => 'required|integer',
            'subject_id' => 'required|integer',
        ];
    }
}
