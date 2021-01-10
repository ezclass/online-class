<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Subject extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name'];

    public function program_subject()
    {
        return $this->hasMany(Program::class, 'subject_id', 'id');
    }
}
