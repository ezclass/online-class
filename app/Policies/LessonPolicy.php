<?php

namespace App\Policies;

use App\Models\Lesson;
use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

class LessonPolicy
{
    use HandlesAuthorization;

    public function delete(User $user, Lesson $lesson)
    {
        return $this->manage($user , $lesson);
    }

    private function manage(User $user, Lesson $lesson)
    {
        return $user->hasRole(Role::ROLE_TEACHER)
        and $lesson->program->user_id == $user->id;
    }
}
