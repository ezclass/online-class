<?php

namespace App\Policies;

use App\Models\Program;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class ProgramPolicy
{
    use HandlesAuthorization;

    public function updateProgram(User $user, Program $program)
    {
        $this->programManage($user, $program);
    }

    public function deleteProgram(User $user, Program $program)
    {
        $this->programManage($user, $program);
    }

     //private
     private function programManage(User $user, Program $program)
     {
         return $user->hasRole(Role::ROLE_TEACHER)
             and $program->user_id == $user->id;
     }
}
