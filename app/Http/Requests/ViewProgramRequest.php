<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ViewProgramRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('view', $this->route('program'));
    }

    public function rules()
    {
        return [];
    }
}
