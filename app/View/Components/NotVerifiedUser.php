<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class NotVerifiedUser extends Component
{
    public Collection $users;

    public function __construct()
    {
        $this->users = User::query()
            ->where('email_verified_at', null)
            ->orWhere('phone_number_verified_at', null)
            ->orderBy('id', 'DESC')
            ->get();
    }

    public function render()
    {
        return view('components.not-verified-user');
    }
}
