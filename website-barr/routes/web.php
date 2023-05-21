<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananTiketController;
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

Route::get('/pemesanan/create', [PemesananTiketController::class, 'create'])->name('pemesanan.create');
Route::post('/pemesanan/store', [PemesananTiketController::class, 'store'])->name('pemesanan.store');
Route::get('/pemesanan/success', [PemesananTiketController::class, 'success'])->name('pemesanan.success');
Route::get('/pemesanan/create-sample-data', [PemesananTiketController::class, 'createSampleData']);
Route::get('/', function () {
    return view('home');
});

Route::get('/film', function () {
    return view('film');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});
