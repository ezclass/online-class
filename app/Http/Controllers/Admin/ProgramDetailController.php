<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSuperAdminRequest;
use App\Models\Lesson;
use App\Models\Meeting;
use App\Models\Program;

class ProgramDetailController extends Controller
{
    public function lesson(AdminSuperAdminRequest $request, Program $program)
    {
        return view('admin.program-detail')
            ->with([
                'program' => $program,
                'lessons' => Lesson::query()
                    ->withTrashed()
                    ->with('program')
                    ->ofProgram($program)
                    ->orderBy('id', 'DESC')
                    ->paginate(10),
            ]);
    }

    public function meeting(AdminSuperAdminRequest $request, Lesson $lesson)
    {
        return view('admin.meeting-detail')
            ->with([
                'lesson' => $lesson,
                'meetings' =>  Meeting::query()
                    ->withTrashed()
                    ->where('lesson_id', $lesson->id)
                    ->orderBy('id', 'DESC')
                    ->paginate(10),
            ]);
    }
}
