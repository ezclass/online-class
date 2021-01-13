<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    // relationships
    
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function subject_program()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id', 'id');
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id', 'id');
    }
}
