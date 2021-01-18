<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class EnrolmentRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_STUDENT);
    }

    public function rules()
    {
        return [
            'program_id' => 'required',
        ];
    }
}
