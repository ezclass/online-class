<?php

namespace App\Policies;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LessonPolicy
{
    use HandlesAuthorization;

    public function create(User $user, Lesson $lesson)
    {
        return $this->lessonCreate($user, $lesson);
    }

    public function update(User $user, Lesson $lesson)
    {
        return $this->lessonManage($user, $lesson);
    }

    public function delete(User $user, Lesson $lesson)
    {
        return $this->lessonManage($user, $lesson);
    }

    //--
    private function lessonCreate(User $user, Lesson $lesson)
    {
        return $lesson->program->user_id == $user->id;
    }

    private function lessonManage(User $user, Lesson $lesson)
    {
        return $lesson->program->user_id == $user->id;
    }
}
