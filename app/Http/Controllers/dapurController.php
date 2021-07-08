<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\View;
use File;
use Route;

class dapurController extends Controller
{
    //
    public function produk(){
        $data = DB::table('produk')->get();
        return view::make('dapur.produk')->with('produk', $data);
    }

    public function produkTersedia($id){
        $data = array('status' => 'tersedia');
        DB::table('produk')->where('id_produk','=', $id)
        ->update($data);
        return redirect('produk');
    }

    public function produkHabis($id){
        $data = array('status' => 'habis');
        DB::table('produk')->where('id_produk','=', $id)
        ->update($data);
        return redirect('produk');
    }


}
