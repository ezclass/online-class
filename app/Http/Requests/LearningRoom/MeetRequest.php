<?php

namespace App\Http\Requests\LearningRoom;

use Illuminate\Foundation\Http\FormRequest;

class MeetRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('view', $this->route('lesson')->program);
    }

    public function rules()
    {
        return [];
    }
}
