<?php

namespace App\Http\Controllers\Ranking;

use ApiChef\Obfuscate\Support\Facades\Obfuscate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Ranking\RankingRemoveRequest;
use App\Http\Requests\Ranking\RankingSaveRequest;
use App\Http\Requests\Ranking\RankingViewRequest;
use App\Models\Ranking;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class RankingController extends Controller
{
    public function view(RankingViewRequest $request)
    {
        $rankIds = null;

        if (Auth::check()) {
            $rankIds = Ranking::query()
                ->select('teacher_id')
                ->where('user_id', $request->user()->id)
                ->get()
                ->pluck('teacher_id')
                ->all();
        }

        return view('ranking.view')
            ->with([
                'teachers' => User::query()
                    ->role('teacher')
                    ->when($rankIds != null, function (Builder $query) use ($rankIds) {
                        $query->whereNotIn('id', $rankIds);
                    })
                    ->get(),
            ]);
    }

    public function save(RankingSaveRequest $request, User $user)
    {
        $rankUser = Obfuscate::decode($request->get('rank_user'));

        $ranking = new Ranking();
        $ranking->teacher_id = $rankUser;
        $ranking->user_id = $request->user()->id;
        $ranking->save();

        $teacher =  $user->find($rankUser);
        $teacher->ranking = $teacher->ranking + 1;
        $teacher->save();

        return redirect()
            ->route('ones.ranking')
            ->with('success', 'Teacher ranking saved');
    }

    public function onesView()
    {
        return view('ranking.ones-ranking')
            ->with([
                'rankings' => Ranking::query()
                    ->with(['teacher'])
                    ->where('user_id', Auth::user()->id)
                    ->get(),
            ]);
    }

    public function remove(RankingRemoveRequest $request, Ranking $ranking)
    {
        $ranking->delete();

        $rankUser = Obfuscate::decode($request->get('rank_user'));
        $teacher =  $ranking->student->find($rankUser);
        $teacher->ranking = $teacher->ranking - 1;
        $teacher->save();

        return redirect()
            ->back()
            ->with('success', 'You have successfully removed the ranking');
    }
}
