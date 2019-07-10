<?php

namespace App\Http\Controllers;
use App\Keluar;
use DB;


use Illuminate\Http\Request;

class KeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $gudangs = DB::table('gudangs')
        ->select(DB::raw('*'))
        ->get();

        $barangs = DB::table('barangs')
        ->select(DB::raw('*'))
        ->get();

     return view('pusdalops.input_keluar',compact(['gudangs','barangs']));

    }

    public function show_keluar($id, Request $req){
        $gudangs = DB::table('gudangs')
        ->select(DB::raw('nama_gudang'))
        ->where('id_gudang','=',$id)
        ->get();

        $keluars = DB::table('keluars')
        ->select(DB::raw('*'))
        // ->join('barangs','barangs.id_barang','=','stoks.id_barang')
        // ->select('barangs.nama_barang','barangs.satuan','keluars.*')
        // ->where('keluars.id_gudang','=',$id)
        ->get(); 

        return view('pusdalops.stok_keluar',compact('keluars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gudang'=>'required',
            'barang'=>'required',
            'kuantitas'=>'required',
            'kadaluarsa'=>'required',
            'deskripsi'=>'required'
        ]);
        // $namaGd = $request->post('gudang');
        // $namaBr = $request->post('barang');

        //     $gudang = DB::table('gudangs')
        //     ->select('id_gudang')
        //     ->where('nama_gudang','like',$namaGd)
        //     ->get();

        //     $barang = DB::table('barangs')
        //     ->select('id_barang')
        //     ->where('nama_barang','like',$namaBr)
        //     ->get();

        $keluar = new keluar([
            'id_gudang'=>$request->post('gudang'),
            'id_barang'=>$request->post('barang'),
            'kuantitas'=>$request->post('kuantitas'),
            'kadaluarsa'=>$request->post('kadaluarsa'),
            'deskripsi'=>$request->post('deskripsi')
        ]);
        $keluar->save();
        
        return view('pusdalops.input_sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
