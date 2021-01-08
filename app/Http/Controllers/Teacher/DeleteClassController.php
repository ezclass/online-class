<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Program;

class DeleteClassController extends Controller
{
    public function __invoke(Program $program)
    {
        $program->delete();
        return redirect()
            ->back()
            ->with('success', 'Class Deleted Success');
    }
}
