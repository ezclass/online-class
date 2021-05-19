<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AllTeacherController;
use App\Http\Controllers\Admin\ClientOpinionController;
use App\Http\Controllers\Admin\EditUserController;
use App\Http\Controllers\Admin\EnrolledStudentDetailController;
use App\Http\Controllers\Admin\PaidController;
use App\Http\Controllers\Admin\PayerDetailController;
use App\Http\Controllers\Admin\ProgramDetailController;
use App\Http\Controllers\Admin\StudentPaymentHistoryController;
use App\Http\Controllers\Admin\SuperAdminDashboardController;
use App\Http\Controllers\Admin\TeacherPayController;
use App\Http\Controllers\Admin\UpdateUserController;
use App\Http\Controllers\Admin\UserStatusController;
use App\Http\Controllers\BankDetailController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactUsController;
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
use App\Http\Controllers\LearningRoom\DownloadAccessController;
use App\Http\Controllers\LearningRoom\FileDeleteController;
use App\Http\Controllers\LearningRoom\FileDownloadController;
use App\Http\Controllers\LearningRoom\FileUploadController;
use App\Http\Controllers\LearningRoom\MeetController;
use App\Http\Controllers\LearningRoom\OverviewController;
use App\Http\Controllers\Notification\MarkAsReadController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\Payment\CashHistoryController;
use App\Http\Controllers\Program\IncomeDetailController;
use App\Http\Controllers\Program\ProgramPaymentHistoryController;
use App\Http\Controllers\Program\ProgramStatusController;
use App\Http\Controllers\Program\StudentDetailController;
use App\Http\Controllers\Security\OtpController;
use App\Http\Controllers\Security\PhoneNumberVerificationController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TermAndConditionController;
use App\Http\Controllers\ViewProgramController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)
    ->name('welcome');

Route::get('/search-class', SearchClassController::class)
    ->name('search.class');

Route::get('/contact-us', [ContactUsController::class, 'view'])
    ->name('contactus');

Route::post('/send-mail', [ContactUsController::class, 'mail'])
    ->name('send.mail');

Route::get('/legal', TermAndConditionController::class)
    ->name('legal');

Route::get('/public-dashboard/{user}', PublicDashboardController::class)
    ->name('public.dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/phone-number-verification', [PhoneNumberVerificationController::class, 'view'])
        ->name('phone.number.verification');

    Route::post('/phone-number-change/{user}', [PhoneNumberVerificationController::class, 'change'])
        ->name('phone.number.change');

    Route::get('/send-otp', [OtpController::class, 'send'])
        ->name('send.otp');

    Route::post('/verify-otp/{user}', [OtpController::class, 'verify'])
        ->name('verify.otp');

    Route::get('/deactive', DeactiveDashboardController::class)
        ->name('deactive.dashboard');
});

Route::middleware(['auth', 'verified', 'active', 'phone_verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)
        ->name('dashboard');

    Route::post('/enroll', EnrolmentRequestController::class)
        ->name('enroll.request');

    Route::post('/save-opinion', [OpinionController::class, 'save'])
        ->name('save-opinion');

    Route::get('/delete-opinion/{opinion}', [OpinionController::class, 'delete'])
        ->name('delete-opinion');

    /* Notification */
    Route::get('/mark-as-read', MarkAsReadController::class)
        ->name('mark.as.read');

    /* Setting */
    Route::get('/setting', [SettingController::class, 'view'])
        ->name('setting');

    Route::post('/setting-save/{user}', [SettingController::class, 'save'])
        ->name('setting.save');

    Route::post('/uploadavaratar/{user}', [SettingController::class, 'uploadavaratar'])
        ->name('uploadavaratar');

    Route::post('/change-email/{user}', [SettingController::class, 'change'])
        ->name('change.email');

    /* Learning */
    Route::get('/lesson/{program}', ViewProgramController::class)
        ->name('program.view');

    Route::get('/learning-room-overview/{lesson}', OverviewController::class)
        ->name('overview');

    Route::get('/meeting/{lesson}', [MeetController::class, 'show'])
        ->name('meet');

    Route::get('/document/{lesson}', DocumentController::class)
        ->name('document');

    Route::get('/document-download/{document}', FileDownloadController::class)
        ->name('file.download');

    /* Payment */
    Route::get('/checkout/success', [CheckoutController::class, 'success'])
        ->name('checkout.success');

    Route::get('/checkout/cancelled', [CheckoutController::class, 'cancelled'])
        ->name('checkout.cancelled');

    Route::get('/checkout/{enrolment}', [CheckoutController::class, 'show'])
        ->name('checkout');

    Route::get('/student-payment-history/{enrolment}/{user}', ProgramPaymentHistoryController::class)
        ->name('payment.history');
});

Route::middleware(['role:teacher', 'verified', 'active', 'phone_verified'])->group(function () {
    Route::get('/teacher/dashboard', TeacherDashboardController::class)
        ->name('teacher.dashboard');

    /*  Program  */
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

    /*  Lesson  */
    Route::post('/create-lesson/{program}', CreateLessonController::class)
        ->name('create.lesson');

    Route::get('/update-lesson/{lesson}', UpdateLessonViewController::class)
        ->name('lesson.edit');

    Route::post('/lesson/{lesson}', UpdateLessonController::class)
        ->name('lesson.update');

    Route::get('/delete-lesson/{lesson}', DeleteLessonController::class)
        ->name('delete.lesson');

    /*  Other  */
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

    Route::post('/document-upload/{lesson}', FileUploadController::class)
        ->name('file.upload');

    Route::get('/download-access-active/{document}', [DownloadAccessController::class, 'active'])
        ->name('download.active');

    Route::get('/download-access-inactive/{document}', [DownloadAccessController::class, 'inactive'])
        ->name('download.inactive');

    Route::post('/document-delete/{document}', FileDeleteController::class)
        ->name('file.delete');

    Route::post('/meet-save/{lesson}', [MeetController::class, 'save'])
        ->name('meet.save');

    Route::post('/meet-delete/{meeting}', [MeetController::class, 'delete'])
        ->name('meet.delete');

    /* payment */
    Route::get('/bank-detail', [BankDetailController::class, 'view'])
        ->name('bank.detail');

    Route::post('/bank-detail-save{user}', [BankDetailController::class, 'save'])
        ->name('bank.detail.save');

    Route::post('/bank-detail-delete/{user}', [BankDetailController::class, 'delete'])
        ->name('bank.detail.delete');

    Route::get('/income-detail/{program}', IncomeDetailController::class)
        ->name('income.detail');

    Route::get('/cash-history', CashHistoryController::class)
        ->name('cash.history');
});

Route::middleware(['role:student', 'verified', 'active', 'phone_verified'])->group(function () {
    Route::get('/student/dashboard', StudentDashboardController::class)
        ->name('student.dashboard');

    Route::get('/enroled-program-delete/{enrolment}', EnroledProgramDeleteController::class)
        ->name('enroled.program.delete');
});

Route::middleware(['role:admin|super_admin', 'verified', 'active', 'phone_verified'])->group(function () {
    Route::get('/admin/all-user', AdminDashboardController::class)
        ->name('admin.dashboard');

    Route::post('/deactive-user/{user}', [UserStatusController::class, 'deactive'])
        ->name('deactive.user');

    Route::post('/active-user/{user}', [UserStatusController::class, 'active'])
        ->name('active.user');

    /* student detail */
    Route::get('/student-payment-history-chech/{enrolment}/{user}', StudentPaymentHistoryController::class)
        ->name('student.payment.history');

    Route::get('/enrolled-student-detail/{program}', EnrolledStudentDetailController::class)
        ->name('enrolled.student.detail');

    /* Teacher Pay */
    Route::get('/all-teacher', AllTeacherController::class)
        ->name('all.teacher');

    Route::get('/teacher-pay/{user}', TeacherPayController::class)
        ->name('teacher.pay');

    Route::post('/paid-save', [PaidController::class, 'save'])
        ->name('paid.save');

    Route::get('/payer-detail/{program}', PayerDetailController::class)
        ->name('payer.detail');

    /* program details */
    Route::get('/lesson-detail/{program}', [ProgramDetailController::class, 'lesson'])
        ->name('program.detail');

    Route::get('/meeting-detail/{lesson}', [ProgramDetailController::class, 'meeting'])
        ->name('meeting.detail');

    /* Opinion */
    Route::get('/client-opinion-request', [ClientOpinionController::class, 'view'])
        ->name('client.opinion');

    Route::get('/accept-opinion-request/{opinion}', [ClientOpinionController::class, 'accept'])
        ->name('accept.opinion');

    Route::get('/delete-opinion-request/{opinion}', [ClientOpinionController::class, 'delete'])
        ->name('delete.opinion');
});

Route::middleware(['role:super_admin', 'verified', 'active', 'phone_verified'])->group(function () {
    Route::get('/super-admin/dashboard', SuperAdminDashboardController::class)
        ->name('super.admin.dashboard');

    Route::get('/edit-user/{user}', EditUserController::class)
        ->name('edit.user');

    Route::post('/update-user/{user}', UpdateUserController::class)
        ->name('update.user');
});

require __DIR__ . '/auth.php';
