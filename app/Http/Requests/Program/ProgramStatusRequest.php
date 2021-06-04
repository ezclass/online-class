<?php

namespace App\Http\Requests\Program;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class ProgramStatusRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->user()->hasRole(Role::ROLE_ADMIN) or $this->user()->hasRole(Role::ROLE_SUPER_ADMIN)) {
            return true;
        }
        return $this->user()->can('create', $this->route('program'));
    }

    public function rules()
    {
        return [];
    }
}
