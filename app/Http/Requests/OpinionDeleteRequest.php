<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpinionDeleteRequest extends FormRequest
{
    public function authorize()
    {
        return $this->route('opinion')->user_id == $this->user()->id;
    }

    public function rules()
    {
        return [];
    }
}
