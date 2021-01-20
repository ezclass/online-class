<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Dashboard\StudentDashboardController;
use App\Http\Controllers\Dashboard\TeacherDashboardController;
use App\Http\Controllers\Enroll\EnrolmentAcceptController;
use App\Http\Controllers\Enroll\EnrolmentRequestController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Lesson\CreateLessonController;
use App\Http\Controllers\Lesson\DeleteLessonController;
use App\Http\Controllers\Lesson\LessonController;
use App\Http\Controllers\Lesson\UpdateLessonController;
use App\Http\Controllers\Lesson\UpdateLessonViewController;
use App\Http\Controllers\Navbar\FaqController;
use App\Http\Controllers\Navbar\FetchAllClassesController;
use App\Http\Controllers\Navbar\FetchAllTeachersController;
use App\Http\Controllers\Program\CreateProgramController;
use App\Http\Controllers\Program\DeleteProgramController;
use App\Http\Controllers\Program\UpdateProgramController;
use App\Http\Controllers\Program\UpdateProgramViewController;
use App\Http\Controllers\Setting\AvatarController;
use App\Http\Controllers\Setting\SettingViewController;
use App\Models\Subject;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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
    return Subject::find(16)->name;
});

Route::middleware(['auth'])->group(function () {

    Route::get('/setting', SettingViewController::class)
        ->name('setting');

    Route::post('/avatar', AvatarController::class)
        ->name('avatar');

    Route::post('/enroll', EnrolmentRequestController::class)
        ->name('enroll.request');
});


Route::middleware(['role:teacher'])->group(function () {

    Route::get('/teacher', TeacherDashboardController::class)
        ->name('teacher');

    Route::post('/create/program', CreateProgramController::class)
        ->name('create.class');

    Route::get('/update/program/{program}', UpdateProgramViewController::class)
        ->name('update.program.view');

    Route::post('/update/program/{program}', UpdateProgramController::class)
        ->name('update.program');

    Route::get('/delete/program/{program}', DeleteProgramController::class)
        ->name('delete.program');


    Route::post('/create/lesson/{program}', CreateLessonController::class)
        ->name('create.lesson');

    Route::get('/update/lesson/{lesson}', UpdateLessonViewController::class)
        ->name('update.lesson.view');

    Route::post('/update/lesson/{lesson}', UpdateLessonController::class)
        ->name('update.lesson');

    Route::get('/delete/lesson/{lesson}', DeleteLessonController::class)
        ->name('delete.lesson');

    Route::post('/enroll/request/accept/{enrolment}', EnrolmentAcceptController::class)
        ->name('enroll.accept');
});

Route::middleware(['role:student'])->group(function () {

    Route::get('/student', StudentDashboardController::class)
        ->name('student');
});

Route::middleware(['role:student|teacher'])->group(function () {

    Route::get('/lesson/{program}', LessonController::class)
        ->name('lesson');
});

Route::middleware(['role:admin|super admin'])->group(function () {

    Route::get('/admin', AdminDashboardController::class)
        ->name('admin');
});
