<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Dashboard\StudentDashboardController;
use App\Http\Controllers\Dashboard\TeacherDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Enroll\AcceptEnrolmentController;
use App\Http\Controllers\EnrolmentRequestController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Lesson\CreateLessonController;
use App\Http\Controllers\Lesson\DeleteLessonController;
use App\Http\Controllers\Lesson\UpdateLessonController;
use App\Http\Controllers\Lesson\UpdateLessonViewController;
use App\Http\Controllers\SearchClassController;
use App\Http\Controllers\Program\CreateProgramController;
use App\Http\Controllers\Program\CreateProgramViewContraller;
use App\Http\Controllers\Program\DeleteProgramController;
use App\Http\Controllers\Program\ProgramViewContraller;
use App\Http\Controllers\Program\UpdateProgramController;
use App\Http\Controllers\Program\UpdateProgramViewController;
use App\Http\Controllers\ViewProgramController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::get('/', HomeController::class)
    ->name('welcome');

Route::get('/search-class', SearchClassController::class)
    ->name('search-class');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', DashboardController::class)
        ->name('dashboard');

    Route::post('/enroll', EnrolmentRequestController::class)
        ->name('enroll.request');

    Route::get('/program/{program}', ViewProgramController::class)
        ->name('program.view');

    Route::post('/accept-enrolment-request/{enrolment}', AcceptEnrolmentController::class)
        ->name('enroll.request.accept');

    Route::get('/checkout/success', [CheckoutController::class, 'success'])
        ->name('checkout.success');

    Route::get('/checkout/cancelled', [CheckoutController::class, 'cancelled'])
        ->name('checkout.cancelled');

    Route::get('/checkout/{program}', [CheckoutController::class, 'show'])
        ->name('checkout');
});


// ----------------------

Route::middleware(['role:teacher'])->group(function () {
    Route::get('/teacher/dashboard', TeacherDashboardController::class)
        ->name('teacher.dashboard');

    Route::get('/create-program', CreateProgramViewContraller::class)
        ->name('create.program.viwe');

    Route::post('/create/program', CreateProgramController::class)
        ->name('create.program');

    Route::get('/program', ProgramViewContraller::class)
        ->name('program.view.teacher');

    Route::get('/update/program/{program}', UpdateProgramViewController::class)
        ->name('update.program.view');

    Route::post('/update/program/{program}', UpdateProgramController::class)
        ->name('update.program');

    Route::get('/delete/program/{program}', DeleteProgramController::class)
        ->name('delete.program');


    Route::post('/create/lesson/{program}', CreateLessonController::class)
        ->name('create.lesson');

    Route::get('/edit-lesson/{lesson}', UpdateLessonViewController::class)
        ->name('lesson.edit');

    Route::put('/lesson/{lesson}', UpdateLessonController::class)
        ->name('lesson.update');

    Route::get('/delete/lesson/{lesson}', DeleteLessonController::class)
        ->name('delete.lesson');
});

Route::middleware(['role:student'])->group(function () {
    Route::get('/student/dashboard', StudentDashboardController::class)
        ->name('student.dashboard');
});

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardController::class)
        ->name('admin.dashboard');
});
