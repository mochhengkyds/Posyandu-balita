<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\bidanController;
use App\Http\Controllers\dashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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



    //menu utama atau dashboard
    Route::get('/dashboard', [dashboardController::class, 'index']);
});
