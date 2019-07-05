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
Route::get('/login', 'pages_controller@login')->name('login');
Route::get('/register', 'pages_controller@register')->name('register');

// PUSDALOPS
Route::get('dashboard', 'pages_controller@dashboard')->name('dashboard');
Route::get('lihat_laporan', 'pages_controller@lihat_laporan')->name('lihat_laporan');
Route::get('input_data', 'pages_controller@input_data')->name('input_data');
Route::get('lihat_gudang', 'pages_controller@lihat_gudang')->name('lihat_gudang');
Route::get('riwayat_masuk', 'pages_controller@riwayat_masuk')->name('riwayat_masuk');
Route::get('riwayat_keluar', 'pages_controller@riwayat_keluar')->name('riwayat_keluar');
Route::get('statistik', 'pages_controller@statistik')->name('statistik');

// TRC
Route::get('input_laporan', 'pages_controller@input_laporan')->name('input_laporan');
Route::get('laporan_trc', 'pages_controller@laporan_trc')->name('laporan_trc');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
