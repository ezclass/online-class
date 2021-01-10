<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class CreateClassControllerRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_TEACHER);
    }

    public function rules()
    {
        return [
            'name' => 'required|max:20',
            'grade' => 'required',
            'image' => 'required',
            'language_id' => 'required|integer',
            'subject_id' => 'required|integer',
            'user_id' => 'required|integer',
        ];
    }
}
