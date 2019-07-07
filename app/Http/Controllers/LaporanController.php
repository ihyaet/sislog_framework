<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Laporan;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
       $laporans = DB::table('laporans')
            ->select(DB::raw('*'))
            ->get();

        return view('trc.laporan_trc',compact('laporans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        // $request->user()->authorizeRole();
        return view('trc.input_laporan');
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
            'nama_laporan'=>'required',
            'tanggal'=>'required',
            'keterangan'=>'required',
            'jumlah_korban'=>'required',
            'lokasi'=>'required',
            'logistik'=>'required',
            'gambar'=>'image|nullable|max:1999'
        ]);
        if($request->hasFile('gambar')){
            $fileNameWithExt = $request->file('gambar')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('gambar')->storeAs('public/gambar',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
      
        $laporan = new laporan([
            'nama_laporan'=>$request->post('nama_laporan'),
            'tanggal'=>$request->post('tanggal'),
            'keterangan'=>$request->post('keterangan'),
            'jumlah_korban'=>$request->post('jumlah_korban'),
            'lokasi'=>$request->post('lokasi'),
            'logistik'=>$request->post('logistik'),
            'id_trc'=> Auth::id(),
            'gambar'=>$fileNameToStore,
        ]);
        $laporan->save();
        return view('trc.input_laporan');
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
