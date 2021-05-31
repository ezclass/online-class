<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrailerDeleteRequest;
use App\Http\Requests\TrailerRequest;
use App\Models\User;

class TrailerController extends Controller
{
    public function save(TrailerRequest $request, User $user)
    {
        $user->trailer = $request->get('trailer');
        $user->save();

        return redirect()
            ->back()
            ->with('success', 'The link was saved successfully');
    }

    public function delete(TrailerDeleteRequest $request, User $user)
    {
        $user->trailer = null;
        $user->save();

        return redirect()
            ->back()
            ->with('success', 'The link was successfully deleted');
    }
}
