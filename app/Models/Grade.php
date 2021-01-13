<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    // relationships
    
    public function program()
    {
        return $this->hasMany(Program::class, 'grade_id', 'id');
    }
}
