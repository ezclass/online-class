<?php

namespace App\Http\Requests\Dashboard;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_STUDENT);
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
