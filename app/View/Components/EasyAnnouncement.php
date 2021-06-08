<?php

namespace App\View\Components;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class EasyAnnouncement extends Component
{
    public Collection $announcements;

    public function __construct()
    {
        $this->announcements = Announcement::query()
            ->get();
    }

    public function render()
    {
        return view('components.easy-announcement');
    }
}
