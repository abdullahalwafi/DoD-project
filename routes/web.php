<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin as ADMIN;
use App\Http\Controllers\Landing as LANDING;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LANDING\LandingController::class, 'index']);
Route::get('/admin', [ADMIN\DashboardController::class, 'index']);

// Database Jenis Wisata
Route::get('/admin/jenis', [ADMIN\JenisWisataController::class, 'index']);
Route::get('/admin/jenis/create', [ADMIN\JenisWisataController::class, 'create']);
Route::post('/admin/jenis', [ADMIN\JenisWisataController::class, 'store']);
Route::get('/admin/jenis/edit/{id}', [ADMIN\JenisWisataController::class, 'edit']);
Route::put('/admin/jenis/update/{id}', [ADMIN\JenisWisataController::class, 'update']);
Route::delete('/admin/jenis/destroy/{id}', [ADMIN\JenisWisataController::class, 'destroy']);

// Landing Page Jenis Wisata
Route::get('/jenis_kecamatan', [LANDING\JenisKecamatanController::class, 'index']);

// Landing Page Kecamatan

// Kecamatan
Route::get('/admin/kecamatan', [ADMIN\KecamatanController::class, 'index']);
Route::get('/admin/kecamatan/create', [ADMIN\KecamatanController::class, 'create']);
Route::post('/admin/kecamatan', [ADMIN\KecamatanController::class, 'store']);
Route::get('/admin/kecamatan/edit/{id}', [ADMIN\KecamatanController::class, 'edit']);
Route::put('/admin/kecamatan/update/{id}', [ADMIN\KecamatanController::class, 'update']);
Route::delete('/admin/kecamatan/destroy/{id}', [ADMIN\KecamatanController::class, 'destroy']);

Route::resource('/admin/news', ADMIN\NewsController::class);
Route::get('/generate', function () {
    $exitCode = Artisan::call('storage:link');
    return '<script>alert("Storage link has been generated.")</script> <meta http-equiv="refresh" content="0; url=/">';
});
