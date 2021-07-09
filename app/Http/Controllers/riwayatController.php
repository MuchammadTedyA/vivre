<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\View;
use File;
use Route;

class riwayatController extends Controller
{
    //
    public function riwayatPenjualan(){
        $data = DB::table('detail_penjualan')
        ->join('produk', 'detail_penjualan.id_produk', '=', 'produk.id_produk')
        ->join('penjualan', 'detail_penjualan.id_penjualan', '=', 'penjualan.id_penjualan')
        ->where('penjualan.status', '=', 'pesanan siap')
        ->orWhere('penjualan.status', '=', 'diterima')
        ->get();
        return view::make('riwayat')->with(['penjualan' => $data]);
    }

    public function pesananDiterima($id){
        $data = array('status' => 'diterima');
        DB::table('penjualan')->where('id_penjualan','=', $id)
        ->update($data);
        return redirect('/riwayat');
    }
}
