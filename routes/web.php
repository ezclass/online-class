<?php

use App\Http\Controllers\Dashboard\TeacherDashboardController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Lesson\LessonController;
use App\Http\Controllers\Navbar\FaqController;
use App\Http\Controllers\Navbar\FetchAllClassesController;
use App\Http\Controllers\Navbar\FetchAllTeachersController;
use App\Http\Controllers\Setting\AvatarController;
use App\Http\Controllers\Setting\SettingViewController;
use App\Http\Controllers\Teacher\CreateClassController;
use App\Http\Controllers\Teacher\DeleteClassController;
use App\Http\Controllers\Teacher\UpdateClassController;
use App\Http\Controllers\Teacher\UpdateClassViewController;
use App\Models\Program;
use App\Models\Subject;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

require __DIR__ . '/auth.php';

Route::get('/', HomeController::class)
    ->name('welcome');

Route::get('/faq', FaqController::class)
    ->name('faq');

Route::get('/all/classes', FetchAllClassesController::class)
    ->name('fetch.class');

Route::get('/all/teachers', FetchAllTeachersController::class)
    ->name('fetch.teacher');

Route::get('/foo', function () {
    App::setLocale('si');
    return Subject::find(10)->name;
});

Route::get('/filter', function () {
    
    $program = QueryBuilder::for(Program::class)
        ->allowedFilters([
            AllowedFilter::exact('grade_id'),
            AllowedFilter::exact('subject_id'),
            AllowedFilter::exact('language_id')
        ])
        ->allowedFields(['name', 'grade_id', 'image', 'user_id', 'subject_id', 'language_id'])
        ->get();
    return $program;

});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', TeacherDashboardController::class)
        ->name('dashboard');

    Route::get('/setting', SettingViewController::class)
        ->name('setting');

    Route::post('/avatar', AvatarController::class)
        ->name('avatar');

    Route::get('/lesson', LessonController::class)
        ->name('lesson');
});


Route::middleware(['role:teacher'])->group(function () {

    Route::post('/create/class', CreateClassController::class)
        ->name('create.class');

    Route::post('/update/class/{program}', UpdateClassController::class)
        ->name('update.class');

    Route::get('/update/class/{program}', UpdateClassViewController::class)
        ->name('update.class.view');

    Route::get('/delete/class/{program}', DeleteClassController::class)
        ->name('delete.class');
});
