<?php

use App\Http\Controllers\Home\HomeClassController;
use App\Http\Controllers\Teacher\CreateClassController;
use App\Http\Controllers\Teacher\DeleteClassController;
use App\Http\Controllers\Teacher\UpdateClassController;
use App\Http\Controllers\Teacher\UpdateClassViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
});

Route::get('/dashboard', [HomeClassController::class, 'index'])
    ->middleware('auth')->name('dashboard');

Route::post('/create', CreateClassController::class)
    ->middleware('auth')->name('create.class');

Route::post('/update', UpdateClassController::class)
    ->middleware('auth')->name('update.class');

Route::get('/update/{program}', UpdateClassViewController::class)
    ->middleware('auth')->name('update.class.view');

Route::get('/delete/{program}', DeleteClassController::class)
    ->middleware('auth')->name('delete.class');

require __DIR__ . '/auth.php';
