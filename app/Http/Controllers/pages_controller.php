<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages_controller extends Controller
{
    public function landing(){
        return view('landing');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function lihat_laporan(){
        return view('pusdalops.laporan_admin');
    }
}
