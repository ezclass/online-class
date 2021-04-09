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
        'password',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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
