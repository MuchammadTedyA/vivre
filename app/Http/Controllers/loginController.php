<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\View;
use Redirect;
use File;
use Route;

use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;

class loginController extends Controller
{
    //
    public function tampilLogin(Request $request)
    {
        $posisi = $request->session()->get('posisi');
        if($posisi == 'manajer'){
            return Redirect::to('/kasir');
        }elseif($posisi == 'kasir'){
            return Redirect::to('/kasir');
        }elseif($posisi == 'dapur'){
            return Redirect::to('/dapur');
        }
        else{
            return view('login');
        }

        // if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
        //     //Login Success
        //     return redirect()->route('home');
        // }
        // return view('login');
    }
    public function logout(Request $request){
        $request->session()->forget('nama-user');
        $request->session()->forget('username');
        $request->session()->forget('password');
        $request->session()->forget('posisi');

        return redirect('/');
        
    }
    public function login(Request $request)
    {
        $username = request()->get('username');
        $password = request()->get('password');

        $admin = DB::table('pengguna')->where(['username' => $username, 'password' => $password],
        'posisi = manajer')->first();
        $dapur = DB::table('pengguna')->where(['username' => $username, 'password' => $password],
        'posisi = dapur')->first();
        $kasir = DB::table('pengguna')->where(['username' => $username, 'password' => $password],
        'posisi = kasir')->first();
        if ($admin->posisi == 'manajer') {
            $request->session()->put('nama-user', $admin->nama_pengguna);
            $request->session()->put('username', $admin->username);
            $request->session()->put('password', $admin->password);
            $request->session()->put('posisi', $admin->posisi);
            return Redirect::to('/kasir')->with('message', 'Login Berhasil');
        } elseif($dapur->posisi == 'dapur'){
            $request->session()->put('nama-user', $admin->nama_pengguna);
            $request->session()->put('username', $admin->username);
            $request->session()->put('posisi', $admin->posisi);
            return Redirect::to('/dapur')->with('message', 'Login Berhasil');
        } elseif($kasir->posisi == 'kasir'){
            $request->session()->put('nama-user', $admin->nama_pengguna);
            $request->session()->put('username', $admin->username);
            $request->session()->put('posisi', $admin->posisi);
            return Redirect::to('/kasir')->with('message', 'Login Berhasil');
        }
        else {
            return Redirect::to('/')->with('message', 'Username dan Password Salah');
        }
    }
}
