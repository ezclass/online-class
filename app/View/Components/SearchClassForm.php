<?php

namespace App\View\Components;

use App\Models\Grade;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class SearchClassForm extends Component
{
    public ?string $selectedGradeId;
    public ?string $selectedSubjectId;
    public Collection $grades;
    public Collection $subjects;

    public function __construct(string $selectedGradeId = null, string $selectedSubjectId = null)
    {
        $this->grades = Grade::query()->get();
        $this->subjects = Subject::query()->get();
        $this->selectedGradeId = $selectedGradeId;
        $this->selectedSubjectId = $selectedSubjectId;
    }

    public function render()
    {
        return view('components.search-class-form');
    }
}
