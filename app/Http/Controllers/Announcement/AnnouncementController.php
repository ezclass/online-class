<?php

namespace App\Http\Controllers\Announcement;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SuperAdminRequest;
use App\Http\Requests\Announcement\AnnouncementRequest;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function save(AnnouncementRequest $request)
    {
        $announcement =  new Announcement();
        $announcement->type = $request->get('type');
        $announcement->expressed = $request->get('expressed');
        $announcement->save();

        return redirect()
            ->back()
            ->with('success', 'Announcement Saved successful.');
    }

    public function delete(SuperAdminRequest $request, Announcement $announcement)
    {
        $announcement->delete();

        return redirect()
            ->back()
            ->with('success', 'Announcement deleted.');
    }
}
