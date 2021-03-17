<?php

namespace App\Http\Requests\LearningRoom;

use Illuminate\Foundation\Http\FormRequest;

class FileUploadRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('view', $this->route('lesson')->program);
    }

    public function rules()
    {
        return [
            'title' => 'required|max:30',
            'file' => 'required|file|mimes:png,jpg,jpeg,pdf,ppt|max:51200',
        ];
    }
}
