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

    public function lihatBahanBaku(){
        $data = DB::table('bahan')->get();
        return view::make('dapur.bahanBaku')->with('bahan', $data);
    }



    public function buatBahan(Request $request){
        $count = DB::table('bahan')
            ->select(DB::raw('max(id_bahan)  as id_bahan'))
            ->get();
        foreach ($count as $item) {
            $ed = intval(substr($item->id_bahan, 2)) + 1;
            
        }

        if ($ed < 10) {
            $ed = 'BH000' . $ed;
        } else if ($ed >= 10 && $ed < 100) {
            $ed = 'BH00' . $ed;
        } else if ($ed >= 100 && $ed < 1000){
            $ed = 'BH0' . $ed;
        }else{
            $ed = 'BH' . $ed;
        }

        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'bahan_img';
        $file->move($tujuan_upload, $nama_file);


        $data = array(
            'id_bahan' => $ed,
            'nama_bahan' => request()->get('namaBahan'),
            'deskripsi_bahan' =>request() ->get('deskripsiBahan'),
            'jumlah' => request()->get('jumlahBahan'),
            'satuan' => request()->get('satuanBahan'),
            'harga' => request()->get('hargaBahan'),
            'gambar' => $nama_file
        );

        DB::table('bahan')->insert($data);

        

        return redirect()->back()->with('message', 'Produk Telah Ditambahkan');
    }


    //BARANG MASUK
    public function barangMasuk($id){
        $data = DB::table('bahan')
        ->where('id_bahan','=', $id)->first();
        return view('dapur.bahan.barangMasuk')->with('bahan', $data);
        
    }

    public function simpanBarangMasuk(Request $request){
        $masuk = request()->get('jumlahBahan');
        $id_bahan= request()->get('id');
        $username = request()->session()->get('username');

        
        $bahan = DB::table('bahan')
        ->where('id_bahan','=', $id_bahan)->first();

        $count = DB::table('bahan_masuk')
            ->select(DB::raw('max(id_masuk)  as id_masuk'))
            ->get();
        foreach ($count as $item) {
            $ed = intval(substr($item->id_masuk, 2)) + 1;
            
        }

        if ($ed < 10) {
            $ed = 'MS000' . $ed;
        } else if ($ed >= 10 && $ed < 100) {
            $ed = 'MS00' . $ed;
        } else if ($ed >= 100 && $ed < 1000){
            $ed = 'MS0' . $ed;
        }else{
            $ed = 'MS' . $ed;
        }

        $totJum = 0;
        $totJum = $masuk + $bahan->jumlah;

        $data_masuk = array(
            'id_masuk' => $ed,
            'id_bahan' => $id_bahan,
            'username' =>$username,
            'jumlah_masuk' => request()->get('jumlahBahan'),
            'tanggal_masuk' => date("Y-m-d"),
            'harga_satuan' => request()->get('hargaBahan')
        );

        $data_bahan = array(
            'jumlah' => $totJum,
            'harga' => request()->get('hargaBahan')
        );

        DB::table('bahan')->where('id_bahan', '=', request()->get('id'))->update($data_bahan);
        DB::table('bahan_masuk')->insert($data_masuk);

        return redirect('/bahanBaku')->with('message', 'Berhasil Menambah Data Barang Masuk');
    }
}
