<?php

namespace App\Models;

use ApiChef\Obfuscate\Obfuscatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meeting extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Obfuscatable;

    protected $dates = [
        'class_date',
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
