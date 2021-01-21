<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class Admin extends Component
{
    public User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('components.admin');
    }
}
