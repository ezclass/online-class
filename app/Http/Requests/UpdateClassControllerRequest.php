<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class UpdateClassControllerRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_TEACHER)
            and $this->route('program')->user_id == $this->user()->id;
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
