<?php

namespace App\Http\Requests\LearningRoom;

use Illuminate\Foundation\Http\FormRequest;

class McqSaveRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('create', $this->route('lesson'));
    }

    public function rules()
    {
        return [
            'link' => 'required|url',
            'description' => 'required',
            'submission' => 'required'
        ];
    }
}
