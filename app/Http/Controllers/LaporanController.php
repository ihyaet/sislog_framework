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
        $mun = Auth::id();

        $admin = Auth::user()->admin;
        if($admin==1){
            $laporans = DB::table('laporans')
            ->join('users','users.id','=','laporans.id_trc')
            ->select('laporans.*','users.name')
            ->get();
            return view('pusdalops.laporan_admin',compact('laporans'));
        }else{
            $laporans = DB::table('laporans')
            ->select(DB::raw('*'))
            ->where('id_trc',$mun)
            ->get();
            return view('trc.laporan_trc',compact('laporans'));   
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        // $request->user()->authorizeRole();
        return view('trc.laporan_trc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mun = Auth::id();
        $laporans = DB::table('laporans')
            ->select(DB::raw('*'))
            ->where('id_trc',$mun)
            ->get();

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
        
        return view('trc.laporan_sukses');
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
    public function edit(Request $request)
    {
        
        $status = $request->post('transaksi');
        $id = $request->post('id_laporan');

        $laporans = DB::table('laporans')
        ->where('id_laporan',$id)
        ->update(['status_laporan'=>$status]);

        return redirect('/laporan');
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
        // $laporans = DB::table('laporans')
        // ->select(DB::raw('id_laporan'))
        // ->get();

        // $request->validate([
        //     'status_laporan'=>'required'
        // ]);
        // $laporan = new laporan([
        //     'status_laporan'=>$request->post('status_laporan')
        // ]);
        // $laporan->save();
        // return view('pusdalops.laporan_admin');
       
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
