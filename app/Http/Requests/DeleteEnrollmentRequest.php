<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteEnrollmentRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('delete', $this->route('enrolment'));
    }

    public function rules()
    {
        return [];
    }
}
