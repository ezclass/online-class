<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('create', $this->route('program'));
    }

    public function rules()
    {
        return [
            'video' => 'required|url',
        ];
    }
}
