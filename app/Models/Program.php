<?php

namespace App\Models;

use ApiChef\Obfuscate\Obfuscatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    use Obfuscatable;

    protected $dates = [
        'start_date',
        'end_date',
        'start_time',
        'end_time',
    ];

    // relationships

    public function teacher()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function enrolments()
    {
        return $this->hasMany(Enrolment::class);
    }

    // actions

    public function enrollStudent(User $user)
    {
        $enrol = new Enrolment();
        $enrol->user_id = $user->id;
        $enrol->program_id = $this->id;
        $enrol->save();
    }

    public function hasEnrolled(User $user): bool
    {
        return Enrolment::query()
            ->where('user_id', $user->id)
            ->where('program_id', $this->id)
            ->whereNotNull('accepted_at')
            ->exists();
    }
}
