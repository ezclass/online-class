<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class PendingVerifyAccount extends Component
{
    public Collection $users;

    public function __construct()
    {
        $this->users = User::query()
            ->where('verify_account', 2)
            ->where('email_verified_at', "<>", null)
            ->where('phone_number_verified_at', "<>", null)
            ->orderBy('id', 'ASC')
            ->get();
    }

    public function render()
    {
        return view('components.pending-verify-account');
    }
}
