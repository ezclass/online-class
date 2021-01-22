<?php

namespace App\View\Components;

use App\Models\Grade;
use App\Models\Language;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class SearchClassForm extends Component
{
    public ?string $selectedGreadId;
    public ?string $selectedSubjectId;
    public Collection $greads;
    public Collection $subjects;

    public function __construct(string $selectedGreadId = null, string $selectedSubjectId = null)
    {
        $this->greads = Grade::query()->get();
        $this->subjects = Subject::query()->get();
        $this->selectedGreadId = $selectedGreadId;
        $this->selectedSubjectId = $selectedSubjectId;
    }

    public function render()
    {
        return view('components.search-class-form');
    }
}
