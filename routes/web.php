<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\EditUserController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\UpdateUserController;
use App\Http\Controllers\Admin\UserStatusController;
use App\Http\Controllers\BankDetailController;
use App\Http\Controllers\BankPaymentController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CheckoutOptionController;
use App\Http\Controllers\Dashboard\PublicDashboardController;
use App\Http\Controllers\Dashboard\StudentDashboardController;
use App\Http\Controllers\Dashboard\TeacherDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeactiveDashboardController;
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
use App\Http\Controllers\Enroll\BlockController;
use App\Http\Controllers\Enroll\RemindCancelController;
use App\Http\Controllers\Enroll\RemindController;
use App\Http\Controllers\Enroll\UnBlockController;
use App\Http\Controllers\Enroll\UpdateEnrolmentController;
use App\Http\Controllers\LearningRoom\DocumentController;
use App\Http\Controllers\LearningRoom\FileDeleteController;
use App\Http\Controllers\LearningRoom\FileDownloadController;
use App\Http\Controllers\LearningRoom\FileUploadController;
use App\Http\Controllers\LearningRoom\FileViewController;
use App\Http\Controllers\LearningRoom\MeetController;
use App\Http\Controllers\LearningRoom\OverviewController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\Program\IncomeDetailController;
use App\Http\Controllers\Program\ProgramPaymentHistoryController;
use App\Http\Controllers\Program\ProgramStatusController;
use App\Http\Controllers\Program\StudentDetailController;
use App\Http\Controllers\TermAndConditionController;
use App\Http\Controllers\ViewProgramController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)
    ->name('welcome');

Route::get('/search-class', SearchClassController::class)
    ->name('search.class');

Route::get('/legal', TermAndConditionController::class)
    ->name('legal');

Route::get('/privacy-policy', PrivacyPolicyController::class)
    ->name('privacy.policy');

Route::get('/public-profile/{user}', PublicDashboardController::class)
    ->name('public.dashboard');

Route::get('/deactive', DeactiveDashboardController::class)
    ->name('deactive.dashboard');


Route::middleware(['auth', 'verified', 'active'])->group(function () {
    Route::get('/dashboard', DashboardController::class)
        ->name('dashboard');

    Route::post('/enroll', EnrolmentRequestController::class)
        ->name('enroll.request');

    Route::get('/lesson/{program}', ViewProgramController::class)
        ->name('program.view');

    Route::get('/learning-room-overview/{lesson}', OverviewController::class)
        ->name('overview');

    Route::get('/meeting/{lesson}', [MeetController::class, 'show'])
        ->name('meet');

    Route::post('/meet-save/{lesson}', [MeetController::class, 'save'])
        ->name('meet.save');

    Route::post('/meet-delete/{meeting}', [MeetController::class, 'delete'])
        ->name('meet.delete');

    Route::get('/document/{lesson}', DocumentController::class)
        ->name('document');


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

    Route::get('/student-payment-history/{enrolment}/{user}', ProgramPaymentHistoryController::class)
        ->name('payment.history');
});


Route::middleware(['role:teacher', 'verified', 'active'])->group(function () {
    Route::get('/teacher/dashboard', TeacherDashboardController::class)
        ->name('teacher.dashboard');

    Route::get('/bank-detail', [BankDetailController::class, 'view'])
        ->name('bank.detail');

    Route::post('/bank-detail-save', [BankDetailController::class, 'save'])
        ->name('bank.detail.save');

    Route::post('/bank-detail-delete/{bankDetail}', [BankDetailController::class, 'delete'])
        ->name('bank.detail.delete');

    Route::get('/create-class', CreateProgramViewContraller::class)
        ->name('create.program.viwe');

    Route::post('/create-program', CreateProgramController::class)
        ->name('create.program');

    Route::get('/class', ProgramViewContraller::class)
        ->name('program.view.teacher');

    Route::get('/program-status-publish/{program}', [ProgramStatusController::class, 'publish'])
        ->name('status.publish');

    Route::get('/program-status-unpublish/{program}', [ProgramStatusController::class, 'unpublish'])
        ->name('status.unpublish');

    Route::get('/update-class/{program}', UpdateProgramViewController::class)
        ->name('update.program.view');

    Route::post('/update-program/{program}', UpdateProgramController::class)
        ->name('update.program');

    Route::get('/delete-program/{program}', DeleteProgramController::class)
        ->name('delete.program');


    Route::post('/create-lesson/{program}', CreateLessonController::class)
        ->name('create.lesson');

    Route::get('/update-lesson/{lesson}', UpdateLessonViewController::class)
        ->name('lesson.edit');

    Route::post('/lesson/{lesson}', UpdateLessonController::class)
        ->name('lesson.update');

    Route::get('/delete-lesson/{lesson}', DeleteLessonController::class)
        ->name('delete.lesson');


    Route::post('/accept-enrolment-request/{enrolment}', AcceptEnrolmentController::class)
        ->name('enroll.request.accept');

    Route::get('/student-detail/{program}', StudentDetailController::class)
        ->name('student.detail');

    Route::post('/update-enrolment-request/{enrolment}', UpdateEnrolmentController::class)
        ->name('enroll.update');

    Route::post('/send-remind/{enrolment}', RemindController::class)
        ->name('send.remind');

    Route::post('/cancel-remind/{enrolment}', RemindCancelController::class)
        ->name('cancel.remind');

    Route::post('/student-block/{enrolment}', BlockController::class)
        ->name('student.block');

    Route::post('/student-unblock/{enrolment}', UnBlockController::class)
        ->name('student.unblock');

    Route::post('/file-upload/{lesson}', FileUploadController::class)
        ->name('file.upload');

    Route::get('/file-view/{document}', FileViewController::class)
        ->name('file.view');

    Route::get('/file-download/{document}', FileDownloadController::class)
        ->name('file.download');

    Route::post('/file-delete/{document}', FileDeleteController::class)
        ->name('file.delete');

    Route::get('/income-detail/{program}', IncomeDetailController::class)
        ->name('income.detail');
});


Route::middleware(['role:student', 'verified', 'active'])->group(function () {
    Route::get('/student/dashboard', StudentDashboardController::class)
        ->name('student.dashboard');

    Route::get('/enroled-program/delete/{enrolment}', EnroledProgramDeleteController::class)
        ->name('enroled-program.delete');
});


Route::middleware(['role:admin|super_admin', 'verified', 'active'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardController::class)
        ->name('admin.dashboard');

    Route::get('/edit-user/{user}', EditUserController::class)
        ->name('edit.user');

    Route::post('/update-user/{user}', UpdateUserController::class)
        ->name('update.user');

    Route::post('/deactive-user/{user}', [UserStatusController::class, 'deactive'])
        ->name('deactive.user');

    Route::post('/active-user/{user}', [UserStatusController::class, 'active'])
        ->name('active.user');

    Route::get('/payment', PaymentController::class)
        ->name('admin.payment');

    Route::post('/bank-payment-success/{subscription}', [BankPaymentController::class, 'success'])
        ->name('bank.payment.success');
});

require __DIR__ . '/auth.php';
