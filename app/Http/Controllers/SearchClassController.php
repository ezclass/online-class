<?php

namespace App\Http\Controllers;

use ApiChef\Obfuscate\Support\Facades\Obfuscate;
use App\Models\Enrolment;
use App\Models\Program;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchClassController extends Controller
{
    public function __invoke(Request $request)
    {
        $enroledProgramIds = null;
        if (Auth::check()) {
            $enroledProgramIds = Enrolment::query()
                ->select('program_id')
                ->where('user_id', $request->user()->id)
                ->get()
                ->pluck('program_id')
                ->all();
        }

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
            ->when($request->filled('name'), function ($query) use ($request) {
                $teacherName = $request->get('name');

                $query->whereHas('teacher', function (Builder $query) use ($teacherName) {
                    $query->where('name', 'like', "%$teacherName%");
                });
            })
            ->when($enroledProgramIds != null, function (Builder $query) use ($enroledProgramIds) {
                $query->whereNotIn('id', $enroledProgramIds);
            })
            ->isPublished()
            ->inRandomOrder()
            ->paginate(16);

        return view('pages.search-class')
            ->with([
                'programs' => $programs,
                'selectedGradeId' => $request->grade,
                'selectedSubjectId' => $request->subject,
            ]);
    }
}
