<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\View;
use File;
use Route;

class kasirController extends Controller
{
    //
    public function lihatSemuaProduk(){
        $cart = session("cart");
        $data = DB::table('produk')->get();
        return view::make('kasir')->with(['produk'=> $data, 'cart'=>$cart]);
        
    }

    public function tambahCart($id_produk)
    {
        $cart= session('cart');
        
        $data = DB::table('produk')->where('id_produk',$id_produk)->first();
        
        $cart[$id_produk] = [ 
            'nama_produk' => $data->nama_produk,
            'harga_produk' => $data->harga,
            'jumlah' => 1
        ];

        session(['cart'=> $cart]);

        return redirect('/kasir');
    }

    function hapusCart($id_produk){
        $cart= session('cart');
        unset($cart[$id_produk]);
        session(['cart' => $cart]);

        return redirect('/kasir');
    }

    
}
