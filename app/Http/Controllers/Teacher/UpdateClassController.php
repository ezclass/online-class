<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateClassControllerRequest;
use App\Models\Program;
use Illuminate\Support\Facades\Storage;

class UpdateClassController extends Controller
{
    public function __invoke(UpdateClassControllerRequest $request)
    {
        $Program = Program::find($request->id);
        $request->file('image');
        $save = $request->file('image');
        $filename = time() . '.' . $save->getClientOriginalExtension();
        $request->image->move('storage/class_image/', $filename);
        $Program->image = $filename;

        $Program->name = $request->get('name');
        $Program->grade = $request->get('grade');
        $Program->subject = $request->get('subject');
        $Program->medium = $request->get('medium');
        $Program->teacher_id = $request->get('teacher_id');

        if ($Program->save()) {
            return redirect()->route('dashboard')
                ->with('success', 'class update success');
        }else {
            return redirect()->route('dashboard')
            ->with('error', 'class not updated');
        }
    }
}
