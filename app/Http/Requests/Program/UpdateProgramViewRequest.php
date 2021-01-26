<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProgramViewRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('update', $this->route('program'));
    }

    public function rules()
    {
        return [];
    }
}
