<?php

namespace App\View\Components;

use App\Models\Lesson;
use Illuminate\View\Component;

class LessonCard extends Component
{
    public Lesson $lesson;

    public function __construct(Lesson $lesson)
    {
        $this->lesson = $lesson;
    }

    public function render()
    {
        return view('components.lesson-card');
    }
}
