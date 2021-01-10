<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;


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
}
