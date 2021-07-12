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

    function tambahJumlah($id_produk){
        $cart= session('cart');
        $id = $id_produk;
        foreach($cart as $ct => $val){
            $id_produk = $ct;
            $nama_produk = $val['nama_produk'];
            $harga = $val['harga_produk'];
            $jumlah = $val["jumlah"];

            $jumlah= $jumlah+1;
            $cart[$id] = [ 
            'nama_produk' => $nama_produk,
            'harga_produk' => $harga,
            'jumlah' => $jumlah
        ];
            
        }session(['cart'=> $cart]);
        

        return redirect('/kasir');
    }

    function kurangJumlah($id_produk){
        $cart= session('cart');
        $id = $id_produk;
        foreach($cart as $ct => $val){
            $id_produk = $ct;
            $nama_produk = $val['nama_produk'];
            $harga = $val['harga_produk'];
            $jumlah = $val["jumlah"];

            $jumlah= $jumlah-1;
            $cart[$id] = [ 
            'nama_produk' => $nama_produk,
            'harga_produk' => $harga,
            'jumlah' => $jumlah
        ];
            
        
            
        }session(['cart'=> $cart]);
        

        return redirect('/kasir');
    }

    public function bayar(Request $request){
        $cart = session("cart");

        $username = request()->session()->get('username');
        $count = DB::table('penjualan')
            ->select(DB::raw('max(id_penjualan)  as id_penjualan'))
            ->get();
        foreach ($count as $item) {
            $ed = intval(substr($item->id_penjualan, 2)) + 1;
            
        }
        if ($ed < 10) {
            $ed = 'PJ0000000' . $ed;
        } else if ($ed >= 10 && $ed < 100) {
            $ed = 'PJ000000' . $ed;
        } else if ($ed >= 100 && $ed < 1000){
            $ed = 'PJ00000' . $ed;
        } else if ($ed >= 1000 && $ed < 10000){
            $ed = 'PJ0000' . $ed;
        } else if ($ed >= 10000 && $ed < 100000){
            $ed = 'PJ000' . $ed;
        } else if ($ed >= 100000 && $ed < 1000000){
            $ed = 'PJ00' . $ed;
        }else if ($ed >= 1000000 && $ed < 10000000){
            $ed = 'PJ0' . $ed;
        }else{
            $ed = 'PJ' . $ed;
        }
        $grandtotal=0;

        foreach($cart as $ct => $val){
            $subtotal = $val["harga_produk"] * $val["jumlah"];
            $grandtotal += $subtotal;
        }

        DB::table('penjualan')->insert([
            'id_penjualan' => $ed,
            'tanggal_penjualan'=> date("Y-m-d"),
            'total_penjualan'=> $grandtotal,
            'status' => 'dikerjakan'
         ]);

         DB::table('riwayat_pengguna')->insert([
            'id_penjualan' => $ed,
            'username'=> $username
         ]);

        foreach($cart as $ct => $val){
            $id_produk = $ct;
            $jumlah = $val['jumlah'];
            DB::table('detail_penjualan')->insert([
               'id_penjualan' => $ed,
               'id_produk'=> $id_produk,
               'jumlah'=> $jumlah
            ]);

            
        }


        session()->forget('cart');
        return redirect('kasir')->with('message', 'Transaksi Berhasil');
        
    }
    
}
