<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnrolmentAcceptRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('accept', $this->route('enrolment'));
    }

    public function rules()
    {
        return [
            'payment_date' => 'required',
            'payment_policy' => 'required',
        ];
    }
}
