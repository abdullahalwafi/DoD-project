<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/admin/wisata', [ADMIN\WisataController::class, 'index']);
Route::get('/admin/wisata/edit/{id}', [ADMIN\WisataController::class, 'edit']);
Route::get('/admin/wisata/create', [ADMIN\WisataController::class, 'create']);
Route::post('/admin/wisata/store', [ADMIN\WisataController::class, 'store']);
Route::delete('/admin/wisata/destroy/{id}', [ADMIN\WisataController::class, 'destroy']);
Route::put('/admin/wisata/update/{id}', [ADMIN\WisataController::class, 'update']);
Route::get('/admin/komentar', [ADMIN\KomentarController::class, 'index']);
Route::post('/komentar/store', [ADMIN\KomentarController::class, 'store']);
Route::delete('/admin/komentar/destroy/{id}', [ADMIN\KomentarController::class, 'destroy']);

Route::get('/wisata', [LANDING\WisataController::class, 'index']);
Route::get('/wisata/show/{id}', [LANDING\WisataController::class, 'show'])->name('wisata.show');;
