<?php

namespace App\Http\Requests\Verify;

use Illuminate\Foundation\Http\FormRequest;

class ViewVerifyAccountRequest extends FormRequest
{
    public function authorize()
    {
        if (!$this->user()->isAccountVerified()) {
            return true;
        }
        return false;
    }

    public function rules()
    {
        return [];
    }
}
