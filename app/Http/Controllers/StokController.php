<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Stok;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gudangs = DB::table('gudangs')
        ->select(DB::raw('nama_gudang'))
        ->get();

        $barangs = DB::table('barangs')
        ->select(DB::raw('nama_barang'))
        ->get();
    return view('pusdalops.input_data',compact(['gudangs','barangs']));

      
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_stok($id, Request $request){
        $stoks = DB::table('stoks')
        ->select(DB::raw('*'))
        ->join('barangs','barangs.id_barang','=','stoks.id_barang')
        ->select('barangs.nama_barang','barangs.satuan','stoks.*')
        ->where('stoks.id_gudang','=',$id)
        ->get();    
       
        return view('pusdalops.stok_gudang',compact('stoks'));
    }

    public function show_gudang()
    {
        $gudangs = DB::table('gudangs')
        ->select(DB::raw('gudangs.nama_gudang, gudangs.id_gudang'))
        ->get();
        

        return view('pusdalops.lihat_gudang',compact('gudangs'));
    }

    public function create()
    {
        
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

        $namaGd = $request->post('gudang');
        $namaBr = $request->post('barang');

        $gudang = DB::table('gudangs')
        ->select('id_gudang')
        ->where('nama_gudang','like',$namaGd)
        ->get();

        $barang = DB::table('barangs')
        ->select('id_barang')
        ->where('nama_barang','like',$namaBr)
        ->get();

        $stok = new stok([
            'id_gudang'=>$gudang[0]->id_gudang,
            'id_barang'=>$barang[0]->id_barang,
            'kuantitas'=>$request->post('kuantitas'),
            'kadaluarsa'=>$request->post('kadaluarsa'),
            'deskripsi'=>$request->post('deskripsi')
        ]);
        $stok->save();
        return redirect('/stok');
       // return view('pusdalops.input_data',compact(['gudangs','barangs']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stoks = DB::table('stoks')
        ->select(DB::raw('*'))
        ->join('barangs','barangs.id_barang','=','stoks.id_barang')
        ->select('barangs.nama_barang','barangs.satuan','stoks.*')
        ->where('stoks.id_gudang','=',$id)
        ->get();    
       
        return view('pusdalops.stok_gudang',compact('stoks'));
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

