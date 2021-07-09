<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\kasirController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dapurController;
use App\Http\Controllers\riwayatController;

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


//LOGIN
Route::get('/', [loginController::class, 'tampilLogin']);
Route::post('/login', [loginController::class, 'login']);

//LOGOUT
Route::get('/logout', [loginController::class, 'logout']);


//////


Route::get('/pembayaran', [PagesController::class, 'pembayaran']);


//RIWAYAT

Route::get('/riwayat', [riwayatController::class, 'riwayatPenjualan']);
Route::get('/diterima/{id}', [riwayatController::class, 'pesananDiterima']);


//KASIR
Route::get('/kasir', [kasirController::class, 'lihatSemuaProduk']);
Route::get('/tambahCart/{id}', [kasirController::class, 'tambahCart']);
Route::get('/hapusCart/{id}', [kasirController::class, 'hapusCart']);
Route::get('/bayar', [kasirController::class, 'bayar']);
Route::get('/tambahJumlah/{id}', [kasirController::class, 'tambahJumlah']);
Route::get('/kurangJumlah/{id}', [kasirController::class, 'kurangJumlah']);

//KARYAWAN
Route::get('/tokoSaya/Karyawan', [karyawanController::class, 'lihatSemuaKaryawan']);
Route::get('/tokoSaya/kasir', [karyawanController::class, 'lihatKasirKaryawan']);
Route::get('/tokoSaya/dapur', [karyawanController::class, 'lihatDapurKaryawan']);

Route::get('tokoSaya/hapusKaryawan/{id}', [karyawanController::class, 'hapusKaryawan']);


Route::post('/tambahKaryawan', [karyawanController::class, 'tambahKaryawan']);

Route::get('/tokoSaya/pengaturanAkun', [PagesController::class, 'tokoSaya']);

//TOKO SAYA BAHAN BAKU
Route::get('/tokoSaya/bahanBaku', [PagesController::class, 'tokoSayaBahanBaku']);


//TOKO SAYA PRODUK
Route::get('/tokoSaya', [produkController::class, 'lihatSemuaProduk']);
Route::get('tokoSaya/kopiMenu', [produkController::class, 'lihatKopiProduk']);
Route::get('tokoSaya/nonKopiMenu', [produkController::class, 'lihatNonKopiProduk']);
Route::get('tokoSaya/makanan', [produkController::class, 'lihatMakananProduk']);

Route::get('hapusProduk/{id}', [produkController::class, 'hapusProduk']);
Route::get('tokoSaya/editProduk/{id}', [produkController::class, 'ubahProduk']);


Route::post('/tambahProduk', [produkController::class, 'tambahProduk']);

////////////////////// DAPUR INI!!!!!!!!!!!!!!!!! /////

Route::get('/dapur', [dapurController::class, 'lihatDapur']);

Route::get('/produk', [dapurController::class, 'produk']);

Route::get('produkTersedia/{id}', [dapurController::class, 'produkTersedia']);

Route::get('produkHabis/{id}', [dapurController::class, 'produkHabis']);

Route::get('/bahanBaku', [dapurController::class, 'lihatBahanBaku']);

Route::get('/halamanTambahBahan', [PagesController::class, 'halamanTambahBahan']);

Route::get('/barangMasuk/{id}', [dapurController::class, 'barangMasuk']);
Route::get('/barangKeluar/{id}', [dapurController::class, 'barangKeluar']);

Route::get('/pesananSiap/{id}', [dapurController::class, 'pesananSiap']);



Route::post('/barangMasuk', [dapurController::class, 'simpanBarangMasuk']);
Route::post('/barangKeluar', [dapurController::class, 'simpanBarangKeluar']);




Route::post('/buatBahan', [dapurController::class, 'buatBahan']);

