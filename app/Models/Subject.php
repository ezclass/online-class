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

    // relationships
    public function programs()
    {
        return $this->hasMany(Program::class, 'subject_id', 'id');
    }
}
