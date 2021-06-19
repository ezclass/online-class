<?php

namespace App\Http\Requests\LearningRoom;

use Illuminate\Foundation\Http\FormRequest;

class YoutubeVideoRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('create', $this->route('lesson'));
    }

    public function rules()
    {
        return [
            'title' => 'required|max:30',
            'link' => 'required|url'
        ];
    }
}
