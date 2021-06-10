<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use App\Http\Requests\Program\AdditionDeleteRequest;
use App\Http\Requests\Program\AdditionRequest;
use App\Models\Addition;
use App\Models\Program;

class AdditionController extends Controller
{
    public function save(AdditionRequest $request, Program $program)
    {
        $addition = new Addition();
        $addition->question = $request->get('question');
        $addition->answer = $request->get('answer');
        $addition->program_id = $program->id;
        $addition->save();

        return redirect()
            ->back()
            ->with('success', 'Additional information added');
    }

    public function delete(AdditionDeleteRequest $request, Addition $addition)
    {
        $addition->delete();

        return redirect()
            ->back()
            ->with('success', 'Additional information was deleted');
    }
}
