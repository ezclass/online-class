<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;

class VideoDeleteRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('delete', $this->route('program'));
    }

    public function rules()
    {
        return [];
    }
}
