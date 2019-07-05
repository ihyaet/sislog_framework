<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages_controller extends Controller
{

    // GENERAL
    public function landing(){
        return view('landing');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }

    // PUSDALOPS
    public function lihat_laporan(){
        return view('pusdalops.laporan_admin');
    }
    public function lihat_gudang(){
        return view('pusdalops.lihat_gudang');
    }
    public function input_data(){
        return view('pusdalops.input_data');
    }
    public function riwayat_masuk(){
        return view('pusdalops.riwayat_masuk');
    }
    public function riwayat_keluar(){
        return view('pusdalops.riwayat_keluar');
    }
    public function statistik(){
        return view('pusdalops.statistik');
    }
    
    // TRC
}
