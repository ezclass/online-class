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
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5120',
            'fees' => 'required',
            'medium' => 'required|integer',
            'subject' => 'required|integer',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'day' => 'required',
        ];
    }
}
