<?php

namespace App\Http\Controllers\Reference;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reference\ReferenceRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    public function view(Request $request)
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
