<?php

use App\Http\Controllers\Admin\AdminBankPaymentController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminOnlinePaymentController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AllTeacherController;
use App\Http\Controllers\Admin\ClientOpinionController;
use App\Http\Controllers\Admin\DeleteUserController;
use App\Http\Controllers\Admin\EditUserController;
use App\Http\Controllers\Admin\EnrolledStudentDetailController;
use App\Http\Controllers\Admin\OnlinePaymentController;
use App\Http\Controllers\Admin\PaidController;
use App\Http\Controllers\Admin\PayerDetailController;
use App\Http\Controllers\Admin\ProgramDetailController;
use App\Http\Controllers\Admin\StudentPaymentHistoryController;
use App\Http\Controllers\Admin\SuperAdminDashboardController;
use App\Http\Controllers\Admin\TeacherPayController;
use App\Http\Controllers\Admin\UpdateUserController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserStatusController;
use App\Http\Controllers\Announcement\AnnouncementController;
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
use App\Http\Controllers\Enroll\EnrollProgramController;
use App\Http\Controllers\Enroll\RemindCancelController;
use App\Http\Controllers\Enroll\RemindController;
use App\Http\Controllers\Enroll\UnBlockController;
use App\Http\Controllers\Enroll\UpdateEnrolmentController;
use App\Http\Controllers\LearningRoom\DocumentController;
use App\Http\Controllers\LearningRoom\DownloadAccessController;
use App\Http\Controllers\LearningRoom\FileDeleteController;
use App\Http\Controllers\LearningRoom\FileDownloadController;
use App\Http\Controllers\LearningRoom\FileUploadController;
use App\Http\Controllers\LearningRoom\McqController;
use App\Http\Controllers\LearningRoom\MeetController;
use App\Http\Controllers\LearningRoom\OverviewController;
use App\Http\Controllers\LearningRoom\YoutubeVideoController;
use App\Http\Controllers\Notification\MarkAsReadController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\Payment\BankPaymentController;
use App\Http\Controllers\Payment\CashHistoryController;
use App\Http\Controllers\Payment\PaymentMethodController;
use App\Http\Controllers\Program\AdditionController;
use App\Http\Controllers\Program\IncomeDetailController;
use App\Http\Controllers\Program\ProgramPaymentHistoryController;
use App\Http\Controllers\Program\ProgramStatusController;
use App\Http\Controllers\Program\StudentDetailController;
use App\Http\Controllers\Program\VideoController;
use App\Http\Controllers\Security\OtpController;
use App\Http\Controllers\Security\PhoneNumberVerificationController;
use App\Http\Controllers\TermAndConditionController;
use App\Http\Controllers\TrailerController;
use App\Http\Controllers\UserSettingController;
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

Route::get('/enroll-class/{program}', EnrollProgramController::class)
    ->name('enroll.program');

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
    Route::get('/setting', [UserSettingController::class, 'view'])
        ->name('setting');

    Route::post('/setting-save/{user}', [UserSettingController::class, 'save'])
        ->name('setting.save');

    Route::post('/uploadavaratar/{user}', [UserSettingController::class, 'uploadavaratar'])
        ->name('uploadavaratar');

    Route::post('/change-email/{user}', [UserSettingController::class, 'change'])
        ->name('change.email');

    /* Learning */
    Route::get('/lesson/{program}', ViewProgramController::class)
        ->name('program.view');

    Route::get('/learning-room-overview/{lesson}', OverviewController::class)
        ->name('overview');

    Route::get('/meeting/{lesson}', [MeetController::class, 'show'])
        ->name('meet');

    Route::get('/safe-document/{lesson}', DocumentController::class)
        ->name('safe.document');

    Route::get('/youtube-video/{lesson}', [YoutubeVideoController::class, 'view'])
        ->name('youtube.video');

    Route::get('/document-download/{document}', FileDownloadController::class)
        ->name('file.download');

    Route::get('/mcq/{lesson}', [McqController::class, 'view'])
        ->name('mcq.view');

    Route::post('/mcq-save/{lesson}', [McqController::class, 'save'])
        ->name('mcq.save');

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

    Route::get('/update-class/{program}', UpdateProgramViewController::class)
        ->name('update.program.view');

    Route::post('/update-program/{program}', UpdateProgramController::class)
        ->name('update.program');

    Route::post('/save-program-video/{program}', [VideoController::class, 'save'])
        ->name('save.program.video');

    Route::get('/delete-program-video/{program}', [VideoController::class, 'delete'])
        ->name('delete.program.video');

    /*  Lesson  */
    Route::post('/create-lesson/{program}', CreateLessonController::class)
        ->name('create.lesson');

    Route::get('/update-lesson/{lesson}', UpdateLessonViewController::class)
        ->name('lesson.edit');

    Route::post('/lesson/{lesson}', UpdateLessonController::class)
        ->name('lesson.update');

    /*  Other  */
    Route::post('/accept-enrolment-request/{enrolment}', [AcceptEnrolmentController::class, 'accept'])
        ->name('accept.enroll.request');

    Route::get('/delete-enrolment-request/{enrolment}', [AcceptEnrolmentController::class, 'delete'])
        ->name('enroll.request.delete');

    Route::get('/student-detail/{program}', StudentDetailController::class)
        ->name('student.detail');

    Route::post('/update-enrolment-request/{enrolment}', UpdateEnrolmentController::class)
        ->name('enroll.update');

    Route::post('/send-remind/{enrolment}', RemindController::class)
        ->name('send.remind');

    Route::get('/cancel-remind/{enrolment}', RemindCancelController::class)
        ->name('cancel.remind');

    Route::get('/student-block/{enrolment}', BlockController::class)
        ->name('student.block');

    Route::get('/student-unblock/{enrolment}', UnBlockController::class)
        ->name('student.unblock');

    Route::post('/document-upload/{lesson}', FileUploadController::class)
        ->name('file.upload');

    Route::post('/youtube-link-save/{lesson}', [YoutubeVideoController::class, 'save'])
        ->name('youtube.link.save');

    Route::get('/download-access-active/{document}', [DownloadAccessController::class, 'active'])
        ->name('download.active');

    Route::get('/download-access-inactive/{document}', [DownloadAccessController::class, 'inactive'])
        ->name('download.inactive');

    Route::get('/document-delete/{document}', FileDeleteController::class)
        ->name('document.delete');

    Route::post('/meet-save/{lesson}', [MeetController::class, 'save'])
        ->name('meet.save');

    Route::get('/meet-delete/{meeting}', [MeetController::class, 'delete'])
        ->name('meet.delete');

    Route::get('/mcq-delete/{mcq}', [McqController::class, 'delete'])
        ->name('mcq.delete');

    /* payment */
    Route::get('/bank-detail', [BankDetailController::class, 'view'])
        ->name('bank.detail');

    Route::post('/bank-detail-save{user}', [BankDetailController::class, 'save'])
        ->name('bank.detail.save');

    Route::get('/bank-detail-delete/{user}', [BankDetailController::class, 'delete'])
        ->name('bank.detail.delete');

    Route::get('/income-detail/{program}', IncomeDetailController::class)
        ->name('income.detail');

    Route::get('/revenue-history', CashHistoryController::class)
        ->name('cash.history');

    /* public profile */
    Route::post('/save-trailer/{user}', [TrailerController::class, 'save'])
        ->name('save.trailer');

    Route::get('/delete-trailer/{user}', [TrailerController::class, 'delete'])
        ->name('delete.trailer');

    Route::post('/save-addition/{program}', [AdditionController::class, 'save'])
        ->name('save.addition');

    Route::get('/delete-addition/{addition}', [AdditionController::class, 'delete'])
        ->name('delete.addition');
});

Route::middleware(['role:student', 'verified', 'active', 'phone_verified'])->group(function () {
    Route::get('/student/dashboard', StudentDashboardController::class)
        ->name('student.dashboard');

    Route::get('/enroled-program-delete/{enrolment}', EnroledProgramDeleteController::class)
        ->name('enroled.program.delete');

    Route::get('/payment-method/{enrolment}', PaymentMethodController::class)
        ->name('payment.method');

    /*Online Payment */
    Route::get('/checkout/success', [CheckoutController::class, 'success'])
        ->name('checkout.success');

    Route::get('/checkout/cancelled', [CheckoutController::class, 'cancelled'])
        ->name('checkout.cancelled');

    Route::get('/checkout/{enrolment}', [CheckoutController::class, 'show'])
        ->name('checkout');

    /*Bank Payment */
    Route::get('/bank-payment/{enrolment}', [BankPaymentController::class, 'show'])
        ->name('bank.payment');

    Route::post('/save-bank-payment/{enrolment}', [BankPaymentController::class, 'save'])
        ->name('save.bank.payment');
});


Route::middleware(['role:admin|super_admin|teacher', 'verified', 'active', 'phone_verified'])->group(function () {
    Route::get('/program-status-publish/{program}', [ProgramStatusController::class, 'publish'])
        ->name('status.publish');

    Route::get('/program-status-unpublish/{program}', [ProgramStatusController::class, 'unpublish'])
        ->name('status.unpublish');

    Route::get('/delete-program/{program}', DeleteProgramController::class)
        ->name('delete.program');

    Route::get('/delete-lesson/{lesson}', DeleteLessonController::class)
        ->name('delete.lesson');
});


Route::middleware(['role:admin|super_admin', 'verified', 'active', 'phone_verified'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardController::class)
        ->name('admin.dashboard');

    Route::get('/admin/all-user', [UserController::class, 'allUser'])
        ->name('all.user');

    Route::get('/admin/not-verified-user', [UserController::class, 'notVerified'])
        ->name('not.verified.user');

    Route::get('/admin/inactive-user', [UserController::class, 'inActiveUser'])
        ->name('inactive.user');

    Route::get('/deactive-user/{user}', [UserStatusController::class, 'deactive'])
        ->name('deactive.user');

    Route::get('/active-user/{user}', [UserStatusController::class, 'active'])
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

    Route::post('/save-announcement', [AnnouncementController::class, 'save'])
        ->name('save.announcement');

    Route::get('/delete-announcement/{announcement}', [AnnouncementController::class, 'delete'])
        ->name('delete.announcement');

    Route::get('/edit-user/{user}', EditUserController::class)
        ->name('edit.user');

    Route::post('/update-user/{user}', UpdateUserController::class)
        ->name('update.user');

    Route::get('/delete-user/{user}', DeleteUserController::class)
        ->name('delete.user');

    /* Bank Payment */
    Route::get('/pending-bank-payment', [AdminBankPaymentController::class, 'pending'])
        ->name('pending.bank.payment');

    Route::get('/approve-bank-payment/{bank}', [AdminBankPaymentController::class, 'approve'])
        ->name('approve.bank.payment');

    Route::get('/delete-bank-payment/{bank}', [AdminBankPaymentController::class, 'delete'])
        ->name('delete.bank.payment');

    Route::get('/success-bank-payment', [AdminBankPaymentController::class, 'successPayment'])
        ->name('success.bank.payment');

    /* Online Payment */
    Route::get('/success-online-payment', [AdminOnlinePaymentController::class, 'success'])
        ->name('success.online.payment');

    Route::get('/cancel-online-payment', [AdminOnlinePaymentController::class, 'cancel'])
        ->name('cancel.online.payment');

    Route::get('/delete-online-payment/{payment}', [AdminOnlinePaymentController::class, 'delete'])
        ->name('delete.online.payment');

    Route::get('/admin-setting', [AdminSettingController::class, 'view'])
        ->name('admin.setting');

    Route::post('/add-subject', [AdminSettingController::class, 'save'])
        ->name('add.subject');

    Route::post('/update-subject/{subject}', [AdminSettingController::class, 'update'])
        ->name('update.subject');
});

require __DIR__ . '/auth.php';
