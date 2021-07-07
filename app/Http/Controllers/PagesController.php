<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login(){
        return view('login');
    }

    public function kitchenSystem(){
        return view('kitchenSystem');
    }

    public function kasir(){
        return view('kasir');
    }
    public function pembayaran(){
        return view('kasirPembayaran');
    }

   //KARYAWAN
    public function tokoSayaKaryawan(){
        return view('toko.karyawan.semua');
    }

    public function tokoSayaKasir(){
        return view('toko.karyawan.kasir');
    }

    public function tokoSayaDapur(){
        return view('toko.karyawan.dapur');
    }


    //TOKO SAYA BAHAN BAKU
    public function tokoSayaBahanBaku(){
        return view('toko.bahanBaku.semua');
    }

    //TOKO SAYA PRODUK
    public function tokoSaya(){
        return view('toko.menu.semua');
    }

    public function kopiMenu(){
        return view('toko.menu.kopi');
    }
    public function nonKopiMenu(){
        return view('toko.menu.nonKopi');
    }
}
