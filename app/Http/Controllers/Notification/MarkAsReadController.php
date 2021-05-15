<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarkAsReadController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->user()->unreadNotifications->markAsRead();

        return redirect()->back();
    }
}
