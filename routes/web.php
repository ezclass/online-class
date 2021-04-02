<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\BankPaymentController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CheckoutOptionController;
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
use App\Http\Controllers\EnroledProgramDeleteController;
use App\Http\Controllers\LearningRoom\FileUploadController;
use App\Http\Controllers\LearningRoom\MeetController;
use App\Http\Controllers\LearningRoom\OverviewController;
use App\Http\Controllers\LearningRoom\PastPaperController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\Program\PaymentDetailController;
use App\Http\Controllers\Program\ProgramPaymentHistoryController;
use App\Http\Controllers\ViewProgramController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::get('/', HomeController::class)
    ->name('welcome');

Route::get('/search-class', SearchClassController::class)
    ->name('search-class');

Route::get('/privacy-policy', PrivacyPolicyController::class)
    ->name('privacy-policy');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', DashboardController::class)
        ->name('dashboard');

    Route::post('/enroll', EnrolmentRequestController::class)
        ->name('enroll.request');

    Route::get('/Lesson/{program}', ViewProgramController::class)
        ->name('program.view');

    Route::post('/accept-enrolment-request/{enrolment}', AcceptEnrolmentController::class)
        ->name('enroll.request.accept');

    Route::get('/overview/{lesson}', OverviewController::class)
        ->name('overview');

    Route::get('/meet/{lesson}', MeetController::class)
        ->name('meet');

    Route::get('/past-paper/{lesson}', PastPaperController::class)
        ->name('pastpaper');

    Route::get('/checkout/success', [CheckoutController::class, 'success'])
        ->name('checkout.success');

    Route::get('/checkout/cancelled', [CheckoutController::class, 'cancelled'])
        ->name('checkout.cancelled');

    Route::get('/checkout/{enrolment}', [CheckoutController::class, 'show'])
        ->name('checkout');

    Route::get('/bank-payment/{enrolment}', [BankPaymentController::class, 'show'])
        ->name('bank.payment');

    Route::post('/bank-payment/{enrolment}', [BankPaymentController::class, 'store'])
        ->name('bank.payment.store');

    Route::get('/checkout-option/{enrolment}', CheckoutOptionController::class)
        ->name('checkout.option');

    Route::get('/payment-history/{enrolment}/{user}', ProgramPaymentHistoryController::class)
        ->name('payment.history');
});


Route::middleware(['role:teacher'])->group(function () {
    Route::get('/teacher/dashboard', TeacherDashboardController::class)
        ->name('teacher.dashboard');

    Route::get('/create-class', CreateProgramViewContraller::class)
        ->name('create.program.viwe');

    Route::post('/create/program', CreateProgramController::class)
        ->name('create.program');

    Route::get('/class', ProgramViewContraller::class)
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

    Route::post('/lesson/{lesson}', UpdateLessonController::class)
        ->name('lesson.update');

    Route::get('/delete/lesson/{lesson}', DeleteLessonController::class)
        ->name('delete.lesson');

    Route::get('/payment-detail/{program}', PaymentDetailController::class)
        ->name('payment.detail');

    Route::post('/file-upload/{lesson}', FileUploadController::class)
        ->name('file.upload');
});


Route::middleware(['role:student'])->group(function () {
    Route::get('/student/dashboard', StudentDashboardController::class)
        ->name('student.dashboard');

    Route::get('/enroled-program/delete/{enrolment}', EnroledProgramDeleteController::class)
        ->name('enroled-program.delete');
});


Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardController::class)
        ->name('admin.dashboard');

    Route::post('/bank-payment/{enrolment}', [BankPaymentController::class, 'success'])
        ->name('bank.payment.success');
});
