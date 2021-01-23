<?php

namespace App\Http\Requests\Lesson;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_TEACHER) or
            $this->user()->hasRole(Role::ROLE_STUDENT);
    }

    public function rules()
    {
        return [
            
        ];
    }
}
