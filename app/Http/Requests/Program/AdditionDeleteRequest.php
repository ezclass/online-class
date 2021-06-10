<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;

class AdditionDeleteRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('delete', $this->route('addition')->program);
    }

    public function rules()
    {
        return [];
    }
}
