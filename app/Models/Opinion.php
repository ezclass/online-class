<?php

namespace App\Models;

use ApiChef\Obfuscate\Obfuscatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;
    use Obfuscatable;

    public function client()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
