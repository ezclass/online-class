<?php

namespace App\Policies;

use App\Models\Enrolment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EnrolmentPolicy
{
    use HandlesAuthorization;

    public function accept(User $user, Enrolment $enrolment)
    {
        return $this->enrolmentManage($user, $enrolment);
    }
    public function remind(User $user, Enrolment $enrolment)
    {
        return $this->enrolmentManage($user, $enrolment);
    }

    public function paymentHistory(User $user, Enrolment $enrolment)
    {
        return $this->enrolmentManage($user, $enrolment);
    }

    private function enrolmentManage(User $user, Enrolment $enrolment)
    {
        return $enrolment->program->user_id == $user->id;
    }
}
