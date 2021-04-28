<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ShowDetailRequest;
use App\Models\User;

class ShowDetailController extends Controller
{
    public function __invoke(ShowDetailRequest $request, User $user)
    {
        return view('admin.show-detail')
            ->with([
                'teacher' => $user,
            ]);
    }
}
