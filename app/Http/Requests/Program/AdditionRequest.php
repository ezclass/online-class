<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;

class AdditionRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('create', $this->route('program'));
    }

    public function rules()
    {
        return [
            'question' => 'required|max:80',
            'answer' => 'required',
        ];
    }
}
