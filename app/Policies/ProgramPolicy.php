<?php

namespace App\Policies;

use App\Models\Program;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProgramPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Program $program)
    {
        return $this->programManage($user, $program);
    }

    public function delete(User $user, Program $program)
    {
        return $this->programManage($user, $program);
    }

    private function programManage(User $user, Program $program)
    {
        return $program->user_id == $user->id;
    }
}
