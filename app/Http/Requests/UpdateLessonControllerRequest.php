<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class UpdateLessonControllerRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_TEACHER)
            and $this->route('lesson')->program_id == $this->route('program')->id
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
