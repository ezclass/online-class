<?php

namespace App\Http\Requests\Ranking;

use Illuminate\Foundation\Http\FormRequest;

class RankingRemoveRequest extends FormRequest
{
    public function authorize()
    {
        return $this->route('ranking')->user_id == $this->user()->id;
    }

    public function rules()
    {
        return [
            'rank_user' => 'required'
        ];
    }
}
