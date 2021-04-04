<?php

namespace App\Http\Requests\Admin;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_ADMIN) or
            $this->user()->hasRole(Role::ROLE_SUPER_ADMIN);
    }

    public function rules()
    {
        return [];
    }
}
