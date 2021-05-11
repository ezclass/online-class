<?php

namespace App\View\Components;

use App\Models\Opinion;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class ClientOpinion extends Component
{
    public Collection $opinions;

    public function __construct()
    {
        $this->opinions = Opinion::query()
            ->with('client')
            ->where('status', 1)
            ->get();
    }

    public function render()
    {
        return view('components.client-opinion');
    }
}
