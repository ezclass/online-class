<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use App\Http\Requests\Program\IncomeDetailRequest;
use App\Models\Program;

class IncomeDetailController extends Controller
{
    public function __invoke(IncomeDetailRequest $request, Program $program)
    {
        return view('program.income-detail')
            ->with([
                'program' => $program,
            ]);
    }
}
