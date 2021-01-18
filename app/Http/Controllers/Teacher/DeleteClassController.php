<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeleteProgramRequest;
use App\Models\Program;
use Illuminate\Support\Facades\Storage;

class DeleteClassController extends Controller
{
    public function __invoke(DeleteProgramRequest $request, Program $program)
    {
        Storage::delete('/public/class_image/'.$program->image);
        $program->delete();
        return redirect()
            ->back()
            ->with('success', 'Class Deleted Success');
    }
}
