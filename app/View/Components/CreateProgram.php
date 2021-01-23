<?php

namespace App\View\Components;

use App\Models\Grade;
use App\Models\Language;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class CreateProgram extends Component
{
    public Collection $grades;
    public Collection $subjects;
    public Collection $languages;

    public function __construct()
    {
        $this->grades = Grade::query()->get();
        $this->subjects = Subject::query()->get();
        $this->languages = Language::query()->get();
    }

    public function render()
    {
        return view('components.create-program');
    }
}
