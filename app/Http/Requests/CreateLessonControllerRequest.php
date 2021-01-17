<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Role;

class CreateLessonControllerRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_TEACHER)
            and $this->route('program')->user_id == $this->user()->id;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:30',
            'date' => 'required',
            'time' => 'required',
        ];
    }
}
