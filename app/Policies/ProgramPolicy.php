<?php

namespace App\Policies;

use App\Models\Program;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProgramPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Program $program)
    {
        $this->programManage($user, $program);
    }

    public function delete(User $user, Program $program)
    {
        $this->programManage($user, $program);
    }

    private function programManage(User $user, Program $program)
    {
        return $user->hasRole(Role::ROLE_TEACHER)
            and $user->id == $program->user_id;
    }
}
