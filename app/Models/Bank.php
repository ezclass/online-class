<?php

namespace App\Models;

use ApiChef\Obfuscate\Obfuscatable;
use ApiChef\PayHere\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    use Obfuscatable;

    protected $dates = [
        'paid_date',
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
