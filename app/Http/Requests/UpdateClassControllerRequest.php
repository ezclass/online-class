<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class UpdateClassControllerRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_TEACHER)
        and $this->route('program')->user_id == $this->user()->id;

        //return $this->user()->hasRole(Role::ROLE_TEACHER);
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
            'subject_id' => [
                'required',
                //Rule::unique('programs'),
            ],
            'language_id' => [
                'required',
            ],
        ];
    }
}
