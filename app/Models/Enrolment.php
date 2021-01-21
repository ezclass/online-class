<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolment extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }


    public function paymentdate()
    {
        return $this->belongsTo(PaymentDate::class , 'payment_date_id');
    }

    public function paymentpolicy()
    {
        return $this->belongsTo(PaymentPolicy::class , 'payment_policy_id');
    }
}
