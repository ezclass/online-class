<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RemindRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('remind', $this->route('enrolment'));
    }

    public function rules()
    {
        return [
            'remind' => 'required|string|max:35',
        ];
    }
}
