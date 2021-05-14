<?php

namespace App\Http\Requests\Lesson;

use Illuminate\Foundation\Http\FormRequest;

class DeleteLessonRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('delete', $this->route('lesson'));
    }

    public function rules()
    {
        return [];
    }
}
