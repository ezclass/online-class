<?php

namespace App\Http\Requests\Dashboard;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_ADMIN, Role::ROLE_SUPER_ADMIN);
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
