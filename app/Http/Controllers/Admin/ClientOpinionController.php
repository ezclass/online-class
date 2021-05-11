<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;
use App\Models\Opinion;

class ClientOpinionController extends Controller
{
    public function view(AdminSuperAdminRequest $request)
    {
        return view('admin.opinion-request')
            ->with([
                'opinions' => Opinion::query()
                    ->with('client')
                    ->where('status', 0)
                    ->paginate(10),
            ]);
    }

    public function accept(AdminSuperAdminRequest $request, Opinion $opinion)
    {
        $opinion->status = 1;
        $opinion->save();

        return redirect()->back()
            ->with('success', 'Opinion request accepted');
    }

    public function delete(AdminSuperAdminRequest $request, Opinion $opinion)
    {
        $opinion->delete();

        return redirect()->back()
            ->with('success', 'Opinion request deleted');
    }
}
