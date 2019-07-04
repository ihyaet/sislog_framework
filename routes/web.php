<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// GENERAL
Route::get('/', 'pages_controller@landing');
Route::get('/login', 'pages_controller@login');
Route::get('/register', 'pages_controller@register');

// PUSDALOPS
Route::get('/lihat_laporan', 'pages_controller@lihat_laporan');
Route::get('input_masuk', function () {
    return view('pusdalops.input_masuk');
});
Route::get('gudang', function () {
    return view('pusdalops.lihat_gudang');
});
Route::get('dashboard', function () {
    return view('pusdalops.dashboard');
});
Route::get('laporan_admin', function () {
    return view('pusdalops.laporan_admin');
});
Route::get('riwayat_masuk', function () {
    return view('pusdalops.riwayat_masuk');
});

// TRC
Route::get('input_laporan', function () {
    return view('trc.input_laporan');
});
Route::get('laporan_trc', function () {
    return view('trc.laporan_trc');
});

