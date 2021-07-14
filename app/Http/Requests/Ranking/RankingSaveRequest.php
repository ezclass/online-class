<?php

namespace App\Http\Requests\Ranking;

use Illuminate\Foundation\Http\FormRequest;

class RankingSaveRequest extends FormRequest
{
    public function authorize()
    {
        return $this->route('user')->id == $this->user()->id;
    }

    public function rules()
    {
        return [
            'rank_user' => 'required'
        ];
    }
}
