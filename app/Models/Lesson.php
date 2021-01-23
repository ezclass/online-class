<?php

namespace App\Models;

use ApiChef\Obfuscate\Obfuscatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    use Obfuscatable;

    protected $dates = [
        'starts_at',
        'ends_at',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
