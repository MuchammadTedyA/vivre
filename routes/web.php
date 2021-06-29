<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'login']);
Route::get('/kitchenSystem', [PagesController::class, 'kitchenSystem']);
Route::get('/kasir', [PagesController::class, 'kasir']);
Route::get('/pembayaran', [PagesController::class, 'pembayaran']);
Route::get('/tokoSaya', [PagesController::class, 'tokoSaya']);
Route::get('/tokoSaya/Karyawan', [PagesController::class, 'tokoSayaKaryawan']);
Route::get('/tokoSaya/pengaturanAkun', [PagesController::class, 'tokoSaya']);