<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class UpdateClassControllerRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_TEACHER);
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                //Rule::unique('programs')
            ],
            'grade' => [
                'required',
                //Rule::unique('programs'),
            ],
            'subject' => [
                'required',
                //Rule::unique('programs'),
            ],
            'medium' => [
                'required',
                ///Rule::unique('programs'),
            ],
            'user_id' => [
                'required',
                //Rule::unique('programs'),
            ],
        ];
    }
}
