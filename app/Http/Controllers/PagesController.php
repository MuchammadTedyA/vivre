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
}
