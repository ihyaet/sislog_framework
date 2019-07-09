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
// Route::get('/', 'pages_controller@landing');

// PUSDALOPS
Route::get('dashboard', 'pages_controller@dashboard')->name('dashboard');
Route::get('lihat_laporan', 'pages_controller@lihat_laporan')->name('lihat_laporan');
Route::get('input_data', 'pages_controller@input_data')->name('input_data');
Route::get('lihat_gudang', 'pages_controller@lihat_gudang')->name('lihat_gudang');
Route::get('riwayat_masuk', 'pages_controller@riwayat_masuk')->name('riwayat_masuk');
Route::get('riwayat_keluar', 'pages_controller@riwayat_keluar')->name('riwayat_keluar');
Route::get('statistik', 'ChartController@index')->name('statistik');



// TRC
Route::get('input_laporan', 'pages_controller@input_laporan')->name('input_laporan');
Route::get('laporan_trc', 'pages_controller@laporan_trc')->name('laporan_trc');


Route::get ('/', function(){
    return view('landing');
});

Auth::routes();

Route::group(['middleware' => ['web','auth']], function(){
    Route::get('/home',function(){
        if (Auth::user()->admin==0){
            return view('trc.input_laporan');
        }else{
            $users['user'] = App\User::all();
            return view('pusdalops.dashboard', $users);
        }
        // return view('welcome');
    });

    // Route::get('/home',function(){
        
    // });
});

Route::resource('laporan','LaporanController');
Route::resource('stok','StokController');
Route::get('/show_stok/{id}','StokController@show_stok')->name('show_stok');
Route::get('/show_gudang','StokController@show_gudang')->name('show_gudang');


