<?php

namespace App\Http\Controllers\Filter;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class FilterAllClassController extends Controller
{
    public function __invoke()
    {
        $program = QueryBuilder::for(Program::class)
            ->allowedFilters([
                AllowedFilter::exact('grade_id'),
                AllowedFilter::exact('subject_id'),
                AllowedFilter::exact('language_id')
            ])
            ->allowedFields([
                'name',
                'grade_id',
                'image',
                'user_id',
                'subject_id',
                'language_id'
            ])
            ->get();

         return $program;
    }
}
