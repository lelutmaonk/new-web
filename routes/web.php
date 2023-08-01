<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NomorPkController;
use App\Http\Controllers\NomorSpbjController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\VendorTeknikController;
use App\Http\Controllers\VendorTibetController;
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

// VENDOR TEKNIK
Route::get('/vendor-teknik', [VendorTeknikController::class, 'index'])->name('vendor-teknik.index');
Route::get('/vendor-teknik/tambah', [VendorTeknikController::class, 'create'])->name('vendor-teknik.create');
Route::post('/vendor-teknik/tambah', [VendorTeknikController::class,'store'])->name('vendor-teknik.store');

// VENDOR TIBET
Route::get('/vendor-tibet', [VendorTibetController::class, 'index'])->name('vendor-tibet.index');
Route::get('/vendor-tibet/tambah', [VendorTibetController::class, 'create'])->name('vendor-tibet.create');
Route::post('/vendor-tibet/tambah', [VendorTibetController::class,'store'])->name('vendor-tibet.store');

// NOMOR SPBJ
Route::get('/nomor-spbj', [NomorSpbjController::class, 'index'])->name('nomor-spbj.index');
Route::get('/nomor-spbj/tambah', [NomorSpbjController::class, 'create'])->name('nomor-spbj.create');
Route::post('/nomor-spbj/tambah', [NomorSpbjController::class,'store'])->name('nomor-spbj.store');

// NOMOR PK
Route::get('/nomor-pk', [NomorPkController::class, 'index'])->name('nomor-pk.index');
Route::get('/nomor-pk/tambah', [NomorPkController::class, 'create'])->name('nomor-pk.create');
Route::post('/nomor-pk/tambah', [NomorPkController::class,'store'])->name('nomor-pk.store');