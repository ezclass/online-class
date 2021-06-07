<?php

namespace App\Http\Requests\LearningRoom;

use Illuminate\Foundation\Http\FormRequest;

class YoutubeVideoRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('view', $this->route('lesson')->program);
    }

    public function rules()
    {
        return [
            'title' => 'required|max:30',
            'youtube' => 'required|url'
        ];
    }
}
