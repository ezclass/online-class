<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningRoom\MeetingSaveRequest;
use App\Http\Requests\LearningRoom\MeetRequest;
use App\Models\Lesson;
use App\Models\Meeting;

class MeetController extends Controller
{
    public function show(MeetRequest $request, Lesson $lesson)
    {
        return view('learning-room.meet')
            ->with([
                'lesson' => $lesson,
                'meetings' => Meeting::query()
                    ->where('lesson_id', $lesson->id)
                    ->orderBy('id','DESC')
                    ->get(),
            ]);
    }

    public function save(MeetingSaveRequest $request, Lesson $lesson, Meeting $meeting)
    {
        $meeting->link = $request->get('link');
        $meeting->password = $request->get('password');
        $meeting->lesson_id = $lesson->id;
        $meeting->save();

        return redirect()->back()
            ->with('success', 'The link was sent to the students');
    }

    public function delete(MeetingSaveRequest $request, Lesson $lesson, Meeting $meeting)
    {
        $meeting->delete();

        return redirect()->back()
            ->with('success', 'The link was sent to the students');
    }
}
