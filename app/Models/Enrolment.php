<?php

namespace App\Models;

use ApiChef\Obfuscate\Obfuscatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolment extends Model
{
    use HasFactory;
    use Obfuscatable;

    // relationships

    public function student()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    // scopes

    public function scopePending(Builder $query)
    {
        $query->whereNull('accepted_at');
    }

    public function scopeOfTeacher(Builder $query, User $teacher)
    {
        $query->whereHas('program', function (Builder $query) use ($teacher) {
            $query->where('user_id', $teacher->id);
        });
    }

    // actions

    public function accept($paymentDate, $paymentPolicy)
    {
        $this->payment_date = $paymentDate;
        $this->payment_policy = $paymentPolicy;
        $this->accepted_at = now();
        $this->save();
    }
}
