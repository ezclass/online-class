<?php

namespace App\Http\Requests\Program;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class DeleteProgramRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->user()->hasRole(Role::ROLE_ADMIN) or $this->user()->hasRole(Role::ROLE_SUPER_ADMIN)) {
            return true;
        }
        return $this->user()->can('delete', $this->route('program'));
    }

    public function rules()
    {
        return [];
    }
}
