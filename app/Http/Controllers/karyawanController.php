<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\View;
use File;
use Route;

class karyawanController extends Controller
{
    //
    public function lihatSemuaKaryawan(){
        $data = DB::table('pengguna')->get();
        return view::make('toko.karyawan.semua')->with('karyawan', $data);
    }
    public function lihatKasirKaryawan(){
        $data = DB::table('pengguna')
        ->where('posisi','kasir')->get();
        return view::make('toko.karyawan.kasir')->with('karyawan', $data);
    }
    public function lihatDapurKaryawan(){
        $data = DB::table('pengguna')
        ->where('posisi','dapur')->get();
        return view::make('toko.karyawan.dapur')->with('karyawan', $data);
    }

    public function tambahKaryawan(Request $request){

        $username = request()->get('kodeKaryawan');
        $nik = request()->get('nik');
        $pengguna = DB::table('pengguna')->where(['username'=>$username])->first();
        $cekNik = DB::table('pengguna')->where(['nik'=>$nik])->first();
        if($pengguna){
            return redirect('/tokoSaya/Karyawan')->with('message', 'Tidak Dapat Menambah Karyawan. Username Telah Digunakan');
        }elseif($cekNik){
            return redirect('/tokoSaya/Karyawan')->with('message', 'Tidak Dapat Menambah Karyawan. NIK Tidak Dapat Digunakan Lebih Dari Satu Kali');
        }
        else{
            $this->validate($request, [
                'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
    
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');
    
            $nama_file = time() . "_" . $file->getClientOriginalName();
    
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'karyawan_img';
            $file->move($tujuan_upload, $nama_file);
    
    
            $data = array(
                'username' => request()->get('kodeKaryawan'),
                'nik' => request()->get('nik'),
                'nama_pengguna' =>request() ->get('namaKaryawan'),
                'password' => request()->get('password'),
                'alamat' => request()->get('alamat'),
                'posisi' => request()->get('posisi'),
                'gambar' => $nama_file
            );
    
            DB::table('pengguna')->insert($data);
    
            
    
            return redirect('/tokoSaya/Karyawan')
            ->with('message', 'Karyawan Telah Ditambahkan');
        }

        
    }

    public function hapusKaryawan($id)
    {
        $nama_gambar = DB::table('pengguna')->where('username', '=', $id)->first();
        File::delete('karyawan_img/' . $nama_gambar->gambar);
        DB::table('pengguna')->where('username', '=', $id)->delete();

        return redirect()->back()->with('message', 'Karyawan Berhasil Dihapus');
    }
}
