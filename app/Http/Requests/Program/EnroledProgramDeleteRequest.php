<?php

namespace App\Http\Requests\Program;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class EnroledProgramDeleteRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->user()->hasRole(Role::ROLE_SUPER_ADMIN)) {
            return true;
        }
        return $this->route('enrolment')->user_id == $this->user()->id;
    }

    public function rules()
    {
        return [];
    }
}
