<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Enrolment;
use App\Models\Program;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicDashboardController extends Controller
{
    public function __invoke(Request $request, User $user)
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
            ->when($enroledProgramIds != null, function (Builder $query) use ($enroledProgramIds) {
                $query->whereNotIn('id', $enroledProgramIds);
            })
            ->where('user_id', $user->id)
            ->isPublished()
            ->paginate(16);

        return view('dashboard.public')
            ->with([
                'teacher' => $user,
                'programs' => $programs,
            ]);
    }
}
