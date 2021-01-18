<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteLessonRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('deleteLesson', $this->route('lesson'));
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
