<?php

namespace App\Models;

use ApiChef\Obfuscate\Obfuscatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcq extends Model
{
    use HasFactory;
    use Obfuscatable;

    protected $dates = [
        'submitted_at',
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
