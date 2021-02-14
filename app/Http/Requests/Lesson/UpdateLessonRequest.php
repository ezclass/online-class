<?php

namespace App\Http\Requests\Lesson;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLessonRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('update', $this->route('lesson'));
    }

    public function rules()
    {
        return [
            'name' => 'required|max:30',
            'starts_at' => 'required',
            'ends_at' => 'required',
        ];
    }
}
