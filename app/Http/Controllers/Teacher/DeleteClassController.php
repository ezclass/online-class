<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher;

class DeleteClassController extends Controller
{
    public function __invoke(Teacher $teacher)
    {
        $teacher->delete();
    }
}
