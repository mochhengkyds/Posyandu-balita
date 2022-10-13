<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\bidanController;
use App\Http\Controllers\DanakController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dokterControler;
use App\Http\Controllers\DIbuController;

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


    //table data dokter
    Route::get('/dokter', [dokterControler::class, 'index']);
    //tambah data dokter
    Route::get('/dokter/tambah', [dokterControler::class, 'create']);
    Route::post('/dokter/simpan', [dokterControler::class, 'save']);
    //edit data dokter
    Route::get('/dokter/edit/{$id}', [dokterControler::class, 'updateData']);
    Route::post('/bidan/edit/{$id}', [dokterControler::class, 'editData']);
    //hapus data dokter
    Route::get('/dokter/{$id}', [dokterControler::class, 'deleteD']);


    //table daftar ibu
    Route::get('/ibu', [DIbuController::class, 'index']);
    //tambah daftar ibu
    Route::get('/ibu/tambah', [DIbuController::class, 'create']);
    Route::post('/ibu/simpan', [DIbuController::class, 'save']);
    //edit daftar ibu
    Route::get('/ibu/edit/{$id}', [DIbuController::class, 'updateData']);
    Route::post('/ibu/edit/{$id}', [DIbuController::class, 'editData']);
    //hapus daftar ibu
    Route::get('/ibu/{$id}', [DIbuController::class, 'deleteD']);

    //table daftar anak
    Route::get('/anak', [DanakController::class, 'index']);
    //tambah daftar anak
    Route::get('/anak/tambah', [DanakController::class, 'create']);
    Route::post('/anak/simpan', [DanakController::class, 'save']);
    //edit daftar anak
    Route::get('/anak/edit{$id}', [DanakController::class, 'updateData']);
    Route::post('/anak/edit/{$id}', [DanakController::class, 'editData']);
    //hapus daftar anak
    Route::get('/anak/{$id}', [DanakController::class, 'deleteD']);

    //table data priksa ibu



    //menu utama atau dashboard
    Route::get('/dashboard', [dashboardController::class, 'index']);
});
