<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\karyawanController;

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


//KARYAWAN
Route::get('/tokoSaya/Karyawan', [karyawanController::class, 'lihatSemuaKaryawan']);
Route::get('/tokoSaya/kasir', [karyawanController::class, 'lihatKasirKaryawan']);
Route::get('/tokoSaya/dapur', [karyawanController::class, 'lihatDapurKaryawan']);

Route::post('/tambahKaryawan', [karyawanController::class, 'tambahKaryawan']);

Route::get('/tokoSaya/pengaturanAkun', [PagesController::class, 'tokoSaya']);

//TOKO SAYA BAHAN BAKU
Route::get('/tokoSaya/bahanBaku', [PagesController::class, 'tokoSayaBahanBaku']);


//TOKO SAYA PRODUK
Route::get('/tokoSaya', [produkController::class, 'lihatSemuaProduk']);
Route::get('tokoSaya/kopiMenu', [produkController::class, 'lihatKopiProduk']);
Route::get('tokoSaya/nonKopiMenu', [produkController::class, 'lihatNonKopiProduk']);
Route::get('tokoSaya/makanan', [produkController::class, 'lihatMakananProduk']);

Route::get('tokoSaya/hapusProduk/{id}', [produkController::class, 'hapusProduk']);


Route::post('/tambahProduk', [produkController::class, 'tambahProduk']);
