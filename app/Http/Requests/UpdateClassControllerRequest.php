<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClassControllerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
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
