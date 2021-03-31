<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Role;

class ProgramPaymentHistoryRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->user()->hasRole(Role::ROLE_STUDENT)) {

            return $this->route('enrolment')->user_id == $this->user()->id;
        }
        return $this->user()->can('paymentHistory', $this->route('enrolment'));
    }

    public function rules()
    {
        return [];
    }
}
