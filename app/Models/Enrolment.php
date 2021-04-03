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

    protected $dates = [
        'accepted_at'
    ];
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

    public function scopeEnroled(Builder $query)
    {
        $query->whereNotNull('accepted_at');
    }

    public function scopeOfTeacher(Builder $query, User $teacher)
    {
        $query->whereHas('program', function (Builder $query) use ($teacher) {
            $query->where('user_id', $teacher->id);
        });
    }

    public function scopeStudents(Builder $query, Program $program)
    {
        $query->whereHas('program', function (Builder $query) use ($program) {
            $query->where('id', $program->id);
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

    public function updateEnrolment($paymentDate, $paymentPolicy)
    {
        $this->payment_date = $paymentDate;
        $this->payment_policy = $paymentPolicy;
        $this->save();
    }
}
