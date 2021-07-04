<?php

namespace App\Http\Controllers\Reference;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reference\ReferenceRequest;
use App\Http\Requests\Reference\ViewReferenceRequest;
use App\Models\User;

class ReferenceController extends Controller
{
    public function view(ViewReferenceRequest $request)
    {
        return view('Reference.reference');
    }

    public function save(ReferenceRequest $request, User $user)
    {
        if ($request->get('reference') == null) {
            $user->reference = 'Homeclass Student';
            $user->save();
        } elseif ($request->get('reference') !== null) {
            $user->reference = $request->get('reference');
            $user->save();
        }

        return redirect()
            ->route('student.dashboard')
            ->with('success', 'Reference number added successfully');
    }
}
