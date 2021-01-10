<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mockery\Matcher\Subset;

class Medium extends Model
{
    use HasFactory;

    public function program_medium()
    {
        return $this->hasMany(Program::class, 'medium_id', 'id');
    }

}
