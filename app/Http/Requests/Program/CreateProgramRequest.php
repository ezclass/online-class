<?php

namespace App\Http\Requests\Program;

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
            'grade' => 'required',
            'fees' => 'required|integer|min:200',
            'medium' => 'required|integer',
            'subject' => 'required|integer',
            'class_type' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'day' => 'required',
            'description' => 'max:255',
        ];
    }
}
