<?php

namespace App\Http\Requests\Reference;

use Illuminate\Foundation\Http\FormRequest;

class ReferenceRequest extends FormRequest
{
    public function authorize()
    {
        return $this->route('user')->id == $this->user()->id;
    }

    public function rules()
    {
        return [
            'reference' => 'integer|nullable',
            'homeclass_student' => 'in:Homeclass Student'
        ];
    }
}
