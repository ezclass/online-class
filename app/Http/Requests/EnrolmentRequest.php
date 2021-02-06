<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnrolmentRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('view');
    }

    public function rules()
    {
        return [
            'program_id' => 'required',
        ];
    }
}
