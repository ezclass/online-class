<?php

namespace App\Http\Requests\Admin;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class PaidRequest extends FormRequest
{
    public function authorize()
    {
        return  $this->user()->hasRole(Role::ROLE_SUPER_ADMIN) or
            (Role::ROLE_ADMIN);
    }

    public function rules()
    {
        return [
            'amount' => 'required',
            'summary' => 'required',
            'user_id' => 'required',
        ];
    }
}
