<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;
use Spatie\Permission\Models\Role;

class SearchUserForm extends Component
{
    public ?string $selectedRoleId;
    public Collection $roles;

    public function __construct(string $selectedRoleId = null)
    {
        $this->roles = Role::query()->get();
        $this->selectedRoleId = $selectedRoleId;
    }

    public function render()
    {
        return view('components.search-user-form');
    }
}
