<?php

namespace App\Models;

use ApiChef\Obfuscate\Obfuscatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use Notifiable;
    use HasRoles;
    use Obfuscatable;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'gender',
        'password',
        'avatar',
        'status',
        'account_name',
        'account_number',
        'bank_name',
        'branch',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // relationships

    public function bank()
    {
        return $this->hasOne(BankDetail::class, 'user_id');
    }

    public function isActive(): bool
    {
        return $this->status == 1;
    }

    public function isVerified(): bool
    {
        return $this->phone_number_verified_at !== null;
    }

    public function isStudent(): bool
    {
        return $this->hasRole(Role::ROLE_STUDENT);
    }

    public function isTeacher(): bool
    {
        return $this->hasRole(Role::ROLE_TEACHER);
    }

    public function isAdmin(): bool
    {
        return $this->hasRole(Role::ROLE_ADMIN);
    }

    public function isSuperAdmin(): bool
    {
        return $this->hasRole(Role::ROLE_SUPER_ADMIN);
    }
}
