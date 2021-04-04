<?php

namespace App\Models;

use ApiChef\Obfuscate\Obfuscatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    use Obfuscatable;

    // scope
    
    public function scopeOfLesson(Builder $query, Lesson $lesson)
    {
        $query->where('lesson_id', $lesson->id);
    }
}
