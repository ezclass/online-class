<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLessonViewRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('updateLesson', $this->route('lesson'));
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
