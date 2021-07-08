<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\View;
use File;
use Route;

class produkController extends Controller
{
    //
    public function lihatSemuaProduk(){
        $data = DB::table('produk')->get();
        return view::make('toko.menu.semua')->with('produk', $data);
    }
    public function lihatKopiProduk(){
        $data = DB::table('produk')->where('kategori_produk','kopi')->get();
        return view::make('toko.menu.kopi')->with('produk', $data);
    }

    public function lihatNonKopiProduk(){
        $data = DB::table('produk')->where('kategori_produk','nonKopi')->get();
        return view::make('toko.menu.nonKopi')->with('produk', $data);
    }
    public function lihatMakananProduk(){
        $data = DB::table('produk')->where('kategori_produk','makanan')->get();
        return view::make('toko.menu.makanan')->with('produk', $data);
    }

    public function tambahProduk(Request $request){
        $count = DB::table('produk')
            ->select(DB::raw('max(id_produk)  as id_produk'))
            ->get();
        foreach ($count as $item) {
            $ed = intval(substr($item->id_produk, 2)) + 1;
            
        }

        $kategory = $request->input('kategoriProduk');

        if($kategory = 'kopi'){
            if ($ed < 10) {
                $ed = 'KP00' . $ed;
            } else if ($ed >= 10 && $ed < 100) {
                $ed = 'KP0' . $ed;
            } else {
                $ed = 'KP' . $ed;
            }
        }elseif($kategory = 'nonKopi'){
            if ($ed < 10) {
                $ed = 'NK00' . $ed;
            } else if ($ed >= 10 && $ed < 100) {
                $ed = 'NK0' . $ed;
            } else {
                $ed = 'NK' . $ed;
            }
        }else{
            if ($ed < 10) {
                $ed = 'MK00' . $ed;
            } else if ($ed >= 10 && $ed < 100) {
                $ed = 'MK0' . $ed;
            } else {
                $ed = 'MK' . $ed;
            }
        }

        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'produk_img';
        $file->move($tujuan_upload, $nama_file);


        $data = array(
            'id_produk' => $ed,
            'nama_produk' => request()->get('namaProduk'),
            'deskripsi_produk' =>request() ->get('deskripsiProduk'),
            'kategori_produk' => request()->get('kategoriProduk'),
            'harga' => request()->get('hargaProduk'),
            'gambar' => $nama_file,
            'status' => 'tersedia'
        );

        DB::table('produk')->insert($data);

        

        return redirect()->back()->with('message', 'Produk Telah Ditambahkan');
    }

    //DELETE

    public function hapusProduk($id)
    {
        $nama_gambar = DB::table('produk')->where('id_produk', '=', $id)->first();
        File::delete('produk_img/'.$nama_gambar->gambar);
        DB::table('produk')->where('id_produk', '=', $id)->delete();

        return redirect()->back();
    }
}
