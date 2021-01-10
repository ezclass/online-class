<?php

use App\Http\Controllers\Dashboard\TeacherDashboardController;
use App\Http\Controllers\Home\DynamicDependent;
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
use App\Models\Subject;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::get('/', HomeController::class)
    ->name('welcome');

Route::get('/dashboard', TeacherDashboardController::class)
    ->middleware('auth')
    ->name('dashboard');

Route::get('/setting', SettingViewController::class)
    ->middleware('auth')
    ->name('setting');

Route::post('/avatar', [AvatarController::class, 'uploadavaratar'])
    ->middleware('auth')
    ->name('avatar');

Route::get('/all/classes', FetchAllClassesController::class)
    ->name('fetch.class');

Route::get('/all/teachers', FetchAllTeachersController::class)
    ->name('fetch.teacher');

Route::get('/faq', FaqController::class)
    ->name('faq');

Route::post('/create/class', CreateClassController::class)
    ->middleware('role:teacher')
    ->name('create.class');

Route::post('/update/class/{program}', UpdateClassController::class)
    ->middleware('role:teacher')
    ->name('update.class');

Route::get('/update/class/{program}', UpdateClassViewController::class)
    ->middleware('role:teacher')
    ->name('update.class.view');

Route::get('/lesson', LessonController::class)
    ->middleware('auth')
    ->name('lesson');

Route::get('/delete/class/{program}', DeleteClassController::class)
    ->middleware('role:teacher')
    ->name('delete.class');

Route::get('/dynamic_dependent', [DynamicDependent::class, 'index']);

Route::post('dynamic_dependent/fetch', [DynamicDependent::class, 'fetch'])
    ->name('dynamicdependent.fetch');


    Route::get('/foo' , function(){
        App::setLocale('si');
        return Subject::find(10)->name;
    });

