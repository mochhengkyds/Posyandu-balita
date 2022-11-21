<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\bidanController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;

// admin
Route::get('/', [authController::class, 'loginUI'])->name('login')->middleware('guest');
Route::post('/', [authController::class, 'loginPost']);
Route::get('/logout', [authController::class, 'logout']);
Route::middleware(['auth'])->group(function () {


    //table data bidan
    Route::get('/bidan', [bidanController::class, 'index']);
    //tambah data bidan
    Route::get('/bidan/tambah', [bidanController::class, 'create']);
    Route::post('/bidan/simpan', [bidanController::class, 'save']);
    //edit data bidan
    Route::get('/bidan/edit/{id}', [bidanController::class, 'updateData']);
    Route::post('/bidan/edit/{id}', [bidanController::class, 'editData']);
    //hapus data bidan
    Route::get('/bidan/{id}', [bidanController::class, 'delete']);

    //download pdf
    Route::get('/downloadpdf', [PasienController::class, 'printpdf']);
    Route::get('/printpdfperid/{id}', [PasienController::class, 'printpdfid']);

    //data pasien
    Route::resource('/pasien', PasienController::class);
    Route::resource('/pemeriksaan', PeriksaController::class);

    //menu utama atau dashboard
    Route::get('/dashboard', [dashboardController::class, 'index']);
});
