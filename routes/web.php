<?php

use App\Http\Controllers\Dashboard\TeacherDashboardController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Navbar\FetchAllClassesController;
use App\Http\Controllers\Navbar\FetchAllTeachersController;
use App\Http\Controllers\Teacher\CreateClassController;
use App\Http\Controllers\Teacher\DeleteClassController;
use App\Http\Controllers\Teacher\UpdateClassController;
use App\Http\Controllers\Teacher\UpdateClassViewController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::get('/', HomeController::class)
    ->name('welcome');

Route::get('/dashboard', TeacherDashboardController::class)
    ->middleware('auth')->name('dashboard');

Route::post('/create/class', CreateClassController::class)
    ->middleware('auth')->name('create.class');

Route::post('/update/class', UpdateClassController::class)
    ->middleware('auth')->name('update.class');

Route::get('/update/class/{program}', UpdateClassViewController::class)
    ->middleware('auth')->name('update.class.view');

Route::get('/delete/class/{program}', DeleteClassController::class)
    ->middleware('auth')->name('delete.class');

Route::get('/all/classes/', FetchAllClassesController::class)
    ->name('fetch.class');

Route::get('/all/teachers/', FetchAllTeachersController::class)
    ->name('fetch.teacher');
