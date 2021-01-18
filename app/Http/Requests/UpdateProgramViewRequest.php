<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProgramViewRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_TEACHER)
            and $this->route('program')->user_id == $this->user()->id;
        // return $this->user()->can('update', $this->route('program'));
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
