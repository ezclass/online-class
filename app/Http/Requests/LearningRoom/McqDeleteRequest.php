<?php

namespace App\Http\Requests\LearningRoom;

use Illuminate\Foundation\Http\FormRequest;

class McqDeleteRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('delete', $this->route('mcq')->lesson);
    }

    public function rules()
    {
        return [];
    }
}
