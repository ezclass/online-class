<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrailerDeleteRequest extends FormRequest
{
    public function authorize()
    {
        return $this->route('user')->id == $this->user()->id;
    }

    public function rules()
    {
        return [];
    }
}
