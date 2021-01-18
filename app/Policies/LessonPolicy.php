<?php

namespace App\Policies;

use App\Models\Lesson;
use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

class LessonPolicy
{
    use HandlesAuthorization;

    public function updateLesson(User $user, Lesson $lesson)
    {
        return $this->lessonManage($user, $lesson);
    }

    public function deleteLesson(User $user, Lesson $lesson)
    {
        return $this->lessonManage($user, $lesson);
    }

    //private
    private function lessonManage(User $user, Lesson $lesson)
    {
        return $user->hasRole(Role::ROLE_TEACHER)
            and $lesson->program->user_id == $user->id;
    }
}
