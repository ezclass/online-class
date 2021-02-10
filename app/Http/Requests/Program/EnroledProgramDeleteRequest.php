<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;

class EnroledProgramDeleteRequest extends FormRequest
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
