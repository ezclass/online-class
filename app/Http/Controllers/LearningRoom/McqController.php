<?php

namespace App\Http\Controllers\LearningRoom;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningRoom\McqDeleteRequest;
use App\Http\Requests\LearningRoom\McqSaveRequest;
use App\Http\Requests\LearningRoom\McqViewRequest;
use App\Models\Lesson;
use App\Models\Mcq;

class McqController extends Controller
{
    public function view(McqViewRequest $request, Lesson $lesson)
    {
        return view('learning-room.mcq-view')
            ->with([
                'lesson' => $lesson,
                'mcqs' => Mcq::query()
                    ->where('lesson_id', $lesson->id)
                    ->paginate(10),
            ]);
    }

    public function save(McqSaveRequest $request, Lesson $lesson)
    {
        $mcq = new Mcq();
        $mcq->link = $request->get('link');
        $mcq->description = $request->get('description');
        $mcq->submitted_at = $request->get('submission');
        $mcq->lesson_id = $lesson->id;
        $mcq->save();

        return redirect()
            ->back()
            ->with('success', 'Data saving is successful');
    }

    public function delete(McqDeleteRequest $request, Mcq $mcq)
    {
        $mcq->delete();

        return redirect()
            ->back()
            ->with('success', 'Data deletion successful');
    }
}
