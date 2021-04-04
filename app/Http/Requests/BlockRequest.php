<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlockRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('block', $this->route('enrolment'));
    }

    public function rules()
    {
        return [];
    }
}
