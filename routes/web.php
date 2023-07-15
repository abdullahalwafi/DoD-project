<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin as ADMIN;
use App\Http\Controllers\Landing as LANDING;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('', [ADMIN\DashboardController::class, 'index']);
        Route::get('/wisata', [ADMIN\WisataController::class, 'index']);
        Route::get('/wisata/edit/{id}', [ADMIN\WisataController::class, 'edit']);
        Route::get('/wisata/create', [ADMIN\WisataController::class, 'create']);
        Route::post('/wisata/store', [ADMIN\WisataController::class, 'store']);
        Route::delete('/wisata/destroy/{id}', [ADMIN\WisataController::class, 'destroy']);
        Route::put('/wisata/update/{id}', [ADMIN\WisataController::class, 'update']);
        Route::get('/komentar', [ADMIN\KomentarController::class, 'index']);
        Route::delete('/komentar/destroy/{id}', [ADMIN\KomentarController::class, 'destroy']);

        // Database Jenis Wisata
        Route::get('/jenis', [ADMIN\JenisWisataController::class, 'index']);
        Route::get('/jenis/create', [ADMIN\JenisWisataController::class, 'create']);
        Route::post('/jenis', [ADMIN\JenisWisataController::class, 'store']);
        Route::get('/jenis/edit/{id}', [ADMIN\JenisWisataController::class, 'edit']);
        Route::put('/jenis/update/{id}', [ADMIN\JenisWisataController::class, 'update']);
        Route::delete('/jenis/destroy/{id}', [ADMIN\JenisWisataController::class, 'destroy']);

        // Kecamatan
        Route::get('/kecamatan', [ADMIN\KecamatanController::class, 'index']);
        Route::get('/kecamatan/create', [ADMIN\KecamatanController::class, 'create']);
        Route::post('/kecamatan', [ADMIN\KecamatanController::class, 'store']);
        Route::get('/kecamatan/edit/{id}', [ADMIN\KecamatanController::class, 'edit']);
        Route::put('/kecamatan/update/{id}', [ADMIN\KecamatanController::class, 'update']);
        Route::delete('/kecamatan/destroy/{id}', [ADMIN\KecamatanController::class, 'destroy']);
        Route::resource('/news', ADMIN\NewsController::class);
        Route::resource('/users', ADMIN\UsersController::class);
    });
});
Route::get('/', [LANDING\LandingController::class, 'index'])->name('home');
Route::post('/komentar/store', [ADMIN\KomentarController::class, 'store']);
Route::get('/wisata', [LANDING\WisataController::class, 'index']);
Route::get('/wisata/show/{id}', [LANDING\WisataController::class, 'show'])->name('wisata.show');

// Landing Page Jenis Wisata dan Kecamatan
Route::get('/jenis_wisata', [LANDING\JenisWisataController::class, 'index']);
Route::get('/kecamatan', [LANDING\KecamatanController::class, 'index']);

Route::get('/generate', function () {
    $exitCode = Artisan::call('storage:link');
    return '<script>alert("Storage link has been generated.")</script> <meta http-equiv="refresh" content="0; url=/">';
});

Auth::routes();

Route::get('/news', [LANDING\NewsController::class, 'index']);
Route::get('/news/{slug}', [LANDING\NewsController::class, 'show']);
