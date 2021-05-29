<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class InactiveUser extends Component
{
    public Collection $users;

    public function __construct()
    {
        $this->users = User::query()
        ->where('status', 0)
        ->orderBy('id', 'DESC')
        ->get();
    }

    public function render()
    {
        return view('components.inactive-user');
    }
}
