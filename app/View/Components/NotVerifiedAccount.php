<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class NotVerifiedAccount extends Component
{
    public Collection $users;

    public function __construct()
    {
        $this->users = User::query()
            ->where('verify_account', 0)
            ->role('teacher')
            ->where('email_verified_at', "<>", null)
            ->where('phone_number_verified_at', "<>", null)
            ->orderBy('id', 'ASC')
            ->get();
    }

    public function render()
    {
        return view('components.not-verified-account');
    }
}
