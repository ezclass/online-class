<?php

namespace App\Http\Requests\LearningRoom;

use Illuminate\Foundation\Http\FormRequest;

class FileDeleteRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('delete', $this->route('document')->lesson);
    }

    public function rules()
    {
        return [];
    }
}
