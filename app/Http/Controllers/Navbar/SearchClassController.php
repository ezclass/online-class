<?php

namespace App\Http\Controllers\Navbar;

use ApiChef\Obfuscate\Support\Facades\Obfuscate;
use App\Http\Controllers\Controller;
use App\Models\Enrolment;
use App\Models\Grade;
use App\Models\Language;
use App\Models\Program;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SearchClassController extends Controller
{
    public function __invoke(Request $request)
    {
        $programs = Program::query()
            ->with(['grade', 'subject', 'teacher', 'language'])
            ->when($request->filled('subject'), function ($query) use ($request) {
                $subjectId = Obfuscate::decode($request->get('subject'));

                $query->whereHas('subject', function (Builder $query) use ($subjectId) {
                    $query->where('id', $subjectId);
                });
            })
            ->when($request->filled('grade'), function ($query) use ($request) {
                $gradeId = Obfuscate::decode($request->get('grade'));

                $query->whereHas('grade', function (Builder $query) use ($gradeId) {
                    $query->where('id', $gradeId);
                });
            })
            ->paginate(15);

        return view('pages.search-class')
            ->with([
                'programs' => $programs,
                'selectedGradeId' => $request->grade,
                'selectedSubjectId' => $request->subject,
            ]);
    }
}
