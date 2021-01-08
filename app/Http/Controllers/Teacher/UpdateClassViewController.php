<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateClassViewControllerRequest;
use App\Models\Program;


class UpdateClassViewController extends Controller
{
    public function __invoke(UpdateClassViewControllerRequest $rquest ,Program $program)
    {
        return view('class.updateclass')
            ->with(['program' => $program]);
    }
}
