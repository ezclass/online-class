<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentViewRequest extends FormRequest
{
    public function authorize()
    {
        return $this->route('enrolment')->user_id == $this->user()->id;
    }

    public function rules()
    {
        return [];
    }
}
