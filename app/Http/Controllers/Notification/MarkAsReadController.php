<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarkAsReadController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->user()->notifications()->delete();

        return redirect()->back();
    }
}
