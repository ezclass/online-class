<?php

namespace App\Http\Requests\Ranking;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class RankingViewRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->hasRole(Role::ROLE_STUDENT);
    }

    public function rules()
    {
        return [];
    }
}
