<?php

namespace App\Http\Requests\Announcement;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
{
    public function authorize()
    {
        return  $this->user()->hasRole(Role::ROLE_SUPER_ADMIN);
    }

    public function rules()
    {
        return [
            'type' => 'required',
            'expressed' => 'required'
        ];
    }
}
