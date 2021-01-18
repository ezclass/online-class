<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class DeleteLessonControllerRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('delete', $this->route('lesson'));
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
