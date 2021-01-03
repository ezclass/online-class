<?php

use App\Http\Controllers\Home\HomeClassController;
use App\Http\Controllers\Teacher\CreateClassController;
use App\Http\Controllers\Teacher\DeleteClassController;
use App\Http\Controllers\Teacher\UpdateClassController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeClassController::class, 'index'])
    ->middleware(['auth'])->name('dashboard');

Route::post('/teachers', CreateClassController::class)
    ->middleware(['auth'])->name('create.class');

Route::post('/teachers/{teacher}', UpdateClassController::class)
    ->middleware(['auth'])->name('update.class');

Route::delete('/teachers/{teacher}', DeleteClassController::class)
    ->middleware(['auth'])->name('delete.class');

require __DIR__ . '/auth.php';
