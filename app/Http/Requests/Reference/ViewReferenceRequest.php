<?php

namespace App\Http\Requests\Reference;

use Illuminate\Foundation\Http\FormRequest;

class ViewReferenceRequest extends FormRequest
{
    public function authorize()
    {
        if (!$this->user()->isReference()) {
            return true;
        }
        return false;
    }

    public function rules()
    {
        return [];
    }
}
