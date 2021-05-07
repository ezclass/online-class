<?php

namespace App\Models;

use ApiChef\Obfuscate\Obfuscatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use HasFactory;
    use Obfuscatable;
    use SoftDeletes;

    protected $dates = [
        'class_date',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    // scope
    public function scopeOfProgram(Builder $query, Program $program)
    {
        $query->where('program_id', $program->id);
    }
}
