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
Route::get('/', 'pages_controller@landing');

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('input_masuk', function () {
    return view('pusdalops.input_masuk');
});

Route::get('gudang', function () {
    return view('pusdalops.lihat_gudang');
});

Route::get('input_laporan', function () {
    return view('trc.input_laporan');
});

