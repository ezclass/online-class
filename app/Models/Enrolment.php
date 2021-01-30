<?php

namespace App\Models;

use ApiChef\Obfuscate\Obfuscatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolment extends Model
{
    use HasFactory;
    use Obfuscatable;

    public function student()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function accept($paymentDate, $paymentPolicy)
    {
        $this->payment_date = $paymentDate;
        $this->payment_policy = $paymentPolicy;
        $this->accepted_at = now();
        $this->save();
    }
}
