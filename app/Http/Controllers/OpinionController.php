<?php

namespace App\Http\Controllers;

use App\Http\Requests\OpinionDeleteRequest;
use App\Http\Requests\OpinionSaveRequest;
use App\Models\Opinion;

class OpinionController extends Controller
{
    public function save(OpinionSaveRequest $request, Opinion $opinion)
    {
        $opinion->opinion = $request->get('opinion');
        $opinion->user_id = $request->user()->id;
        $opinion->save();

        return redirect()->back()
            ->with('success', 'Opinion successfully sent to admin');
    }

    public function delete(OpinionDeleteRequest $request, Opinion $opinion)
    {
        $opinion->delete();

        return redirect()->back()
            ->with('success', 'Opinion was successfully deleted');
    }
}
