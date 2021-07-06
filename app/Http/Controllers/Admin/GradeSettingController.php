<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GradeSettingRequest;
use App\Http\Requests\Admin\SuperAdminRequest;
use App\Models\Grade;

class GradeSettingController extends Controller
{
    public function save(GradeSettingRequest $request)
    {
        $grade = new Grade();
        $grade->name  = $request->get('name');
        $grade->save();

        return redirect()
            ->back()
            ->with('success', 'Grade saving is successful');
    }

    public function update(SuperAdminRequest $request, Grade $grade)
    {
        $grade->name = $request->get('grade');
        $grade->save();

        return redirect()
            ->back()
            ->with('success', 'Grade update successful');
    }
}
