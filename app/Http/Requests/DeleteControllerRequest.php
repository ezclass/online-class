<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class DeleteControllerRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_TEACHER)
        and $this->route('program')->user_id == $this->user()->id;
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
