<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelayananController;
use Illuminate\Support\Facades\Route;

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

// DASHBOARD
Route::get('/', [DashboardController::class, 'index']);

// PELAYANAN
Route::get('/pelayanan', [PelayananController::class, 'index'])->name('pelayanan.index');
Route::get('/pelayanan/tambah', [PelayananController::class, 'create'])->name('pelayanan.create');
Route::post('/pelayanan', [PelayananController::class,'store'])->name('pelayanan.store');