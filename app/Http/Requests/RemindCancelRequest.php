<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RemindCancelRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('remind', $this->route('enrolment'));
    }

    public function rules()
    {
        return [];
    }
}
