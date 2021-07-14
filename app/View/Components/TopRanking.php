<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class TopRanking extends Component
{
    public Collection $teachers;

    public function __construct()
    {
        $this->teachers =  User::query()
            ->role('teacher')
            ->where('ranking', ">", 0)
            ->orderBy('ranking', 'DESC')
            ->limit(4)
            ->get();
    }

    public function render()
    {
        return view('components.top-ranking');
    }
}
