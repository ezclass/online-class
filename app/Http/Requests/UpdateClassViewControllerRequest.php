<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class UpdateClassViewControllerRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_TEACHER);
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
