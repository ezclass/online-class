<?php

namespace App\Http\Requests\LearningRoom;

use Illuminate\Foundation\Http\FormRequest;

class MeetingDeleteRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('create', $this->route('meeting')->lesson);
    }

    public function rules()
    {
        return [];
    }
}
