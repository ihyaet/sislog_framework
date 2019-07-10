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
        ->select(DB::raw('*'))
        ->get();

        $barangs = DB::table('barangs')
        ->select(DB::raw('*'))
        ->get();

         //     $gudangs = DB::table('gudangs')
    //     ->select(DB::raw('nama_gudang'))
    //     ->where('id_gudang','=',$id)
    //     ->get();

    //     $stoks = DB::table('stoks')
    //     ->select(DB::raw('*'))
    //     ->join('barangs','barangs.id_barang','=','stoks.id_barang')
    //     ->select('barangs.nama_barang','barangs.satuan','stoks.*')
    //     ->where('stoks.id_gudang','=',$id)
    //     ->get();    

    //     $stoks = DB::tabels('stoks')
    //     ->select(DB::raw('*'))
    //     ->get();

    //     $keluars = DB::tabels('$keluars')
    //     ->select(DB::raw('*'))
    //     ->get();

    //     $inpp = $stoks->sum('stoks.kuantitas');
    //     $ink = $keluars->sum('keluars.kuantitas');
        
    //     $prio = $gudangs->prio;

    //     //persediaan
    //     $sb = (700 - $inpp )/(1500-700);
    //     $ss = ($inpp - 700)/(1500-700);

    //     //pengeluaran
    //     $kb = (800 - $inpk)/(1700 - 800);
    //     $ks = ($inpk - 800)/(1700 - 800);

    //     //R1: IF Persediaan BANYAK AND Pengeluaran BANYAK, THEN Prioritas TINGGI
    //     //myu persediaan banyak
    //     if($inpp >= 700 && $inpp <= 1500){
    //         $per = $sb;
    //     }elseif($inpp >= 1500){
    //         $per = 1;
    //     }else{
    //         $per = 0;
    //     }

    //     //myu pengeluaran banyak
    //     if($inpk >= 800 && $inpp <= 1700){
    //         $pek = $sb;
    //     }elseif($inpp <= 1700){
    //         $pek = 1;
    //     }else{
    //         $pek = 0;
    //     }

    //     //prioritas tinggi
    //     $r1 = min($per,$pek);
    //     $z1 = $r1 *100;

    //     //R2: IF Persediaan BANYAK AND Pengeluaran SEDIKIT, THEN Prioritas RENDAH
    //     //myu persediaan banyak 
    //     if($inpp >= 700 && $inpp <= 1500){
    //         $per = $ss;
    //     }elseif($inpp >= 1500){
    //         $pers = 1;
    //     }else{
    //         $per = 0;
    //     }

    //     //myu pengeluaran sedikit
    //     if($inpk >= 800 && $inpk <= 1700){
    //         $pek = $ks;
    //     }elseif($inpk <= 1700){
    //         $pek = 1;
    //     }else{
    //         $pek = 0;
    //     }

    //     //prioritas tendah
    //     $r2 = min($per,$pek);
    //     $z2 = (100 - $r2)/100;


    //     // R3: IF Persediaan SEDIKIT AND Pengeluaran BANYAK, THEN Prioritas TINGGI
    //     //myu persediaan sedikit
    //     if($inpp >= 700 && $inpp >= 1500){
    //         $per = $ss;
    //     }elseif($inpp <= 700){
    //         $per = 1;
    //     }else{
    //         $per = 0;
    //     }
        
    //     //myu pengeluaran banyak
    //     if($inpk >= 800 && $inpp <= 1700){
    //         $pek = $sb;
    //     }elseif($inpp <= 1700){
    //         $pek = 1;
    //     }else{
    //         $pek = 0;
    //     }

    //     //prioritas tinggi
    //     $r3 = min($per,$pek);
    //     $z3 = $r3 *100;

    //     //R4: IF Persediaan SEDIKIT AND Pengeluaran SEDIKIT, THEN Prioritas RENDAH
    //     //myu persediaan sedikit
    //     if($inpp >= 700 && $inpp >= 1500){
    //         $per = $ss;
    //     }elseif($inpp <= 700){
    //         $per = 1;
    //     }else{
    //         $per = 0;
    //     }

    //     //myu pengeluaran sedikit
    //     if($inpk >= 800 && $inpk <= 1700){
    //         $pek = $ks;
    //     }elseif($inpk <= 1700){
    //         $pek = 1;
    //     }else{
    //         $pek = 0;
    //     }

    //     //prioritas tendah
    //     $r4 = min($per,$pek);
    //     $z4 = (100 - $r4)/100;

    //     $defuzzy =(($r1*$z1)+($r2*$z2)+($r3*$z3)+($r4*$z4))/($r1+$r2+$r3+$r4);

    //     if($defuzzy <=50 ){
    //         $gudang->prioritas = "Rendah";
    //     }else{
    //         $gudang.prioritas ="Tinggi";
    //     }
       
    //     return view('pusdalops.stok_gudang',compact('stoks','gudangs'));

     return view('pusdalops.input_data',compact(['gudangs','barangs']));
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_stok($id, Request $req){

        $gudangs = DB::table('gudangs')
        ->select(DB::raw('nama_gudang'))
        ->where('id_gudang','=',$id)
        ->get();

        $stoks = DB::table('stoks')
        ->select(DB::raw('*'))
        ->join('barangs','barangs.id_barang','=','stoks.id_barang')
        ->select('barangs.nama_barang','barangs.satuan','stoks.*')
        ->where('stoks.id_gudang','=',$id)
        ->get();    
       
        return view('pusdalops.stok_gudang',compact('stoks','gudangs'));
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
        $gudang_id = $request->post('gudang');
        $barang_id = $request->post('barang');
        $kuantitas = (int)$request->post('kuantitas');
        $stoks = DB::table('stoks')
            ->select(DB::raw('*'))
            ->where('id_gudang', '=', $gudang_id)
            ->where('id_barang', '=', $barang_id)
            ->get();
        // dd($stoks);

        if(count($stoks) > 0) {
            foreach($stoks as $stok) {
                DB::table('stoks')
                    ->where('id_barang','=', $stok->id_barang)
                    ->where('id_gudang', '=', $stok->id_gudang)
                    ->update(['kuantitas' => $kuantitas + $stok->kuantitas]) ;
            }
        } else {
            $request->validate([
                'gudang'=>'required',
                'barang'=>'required',
                'kuantitas'=>'required',
                'kadaluarsa'=>'required',
                'deskripsi'=>'required'
            ]);
    
            $namaGd = $request->post('gudang');
            $namaBr = $request->post('barang');
    
            $stok = new stok([
                'id_gudang'=>$request->post('gudang'),
                'id_barang'=>$request->post('barang'),
                'kuantitas'=>$request->post('kuantitas'),
                'kadaluarsa'=>$request->post('kadaluarsa'),
                'deskripsi'=>$request->post('deskripsi')
            ]);
            $stok->save();
        }
        // return redirect('/stok');
        return view('pusdalops.input_sukses');
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
    // public function show_stokz($id, Request $req){

    //     $gudangs = DB::table('gudangs')
    //     ->select(DB::raw('nama_gudang'))
    //     ->where('id_gudang','=',$id)
    //     ->get();

    //     $stoks = DB::table('stoks')
    //     ->select(DB::raw('*'))
    //     ->join('barangs','barangs.id_barang','=','stoks.id_barang')
    //     ->select('barangs.nama_barang','barangs.satuan','stoks.*')
    //     ->where('stoks.id_gudang','=',$id)
    //     ->get();    

    //     $stoks = DB::tabels('stoks')
    //     ->select(DB::raw('*'))
    //     ->get();

    //     $keluars = DB::tabels('$keluars')
    //     ->select(DB::raw('*'))
    //     ->get();

    //     $inpp = $stoks->sum('kuantitas');
    //     $ink = $keluars->sum('kuantitas');
        
    //     $prio = $gudangs->prio;

    //     //persediaan
    //     $sb = (700 - $inpp )/(1500-700);
    //     $ss = ($inpp - 700)/(1500-700);

    //     //pengeluaran
    //     $kb = (800 - $inpk)/(1700 - 800);
    //     $ks = ($inpk - 800)/(1700 - 800);

    //     //R1: IF Persediaan BANYAK AND Pengeluaran BANYAK, THEN Prioritas TINGGI
    //     //myu persediaan banyak
    //     if($inpp >= 700 && $inpp <= 1500){
    //         $per = $sb;
    //     }elseif($inpp >= 1500){
    //         $per = 1;
    //     }else{
    //         $per = 0;
    //     }

    //     //myu pengeluaran banyak
    //     if($inpk >= 800 && $inpp <= 1700){
    //         $pek = $sb;
    //     }elseif($inpp <= 1700){
    //         $pek = 1;
    //     }else{
    //         $pek = 0;
    //     }

    //     //prioritas tinggi
    //     $r1 = min($per,$pek);
    //     $z1 = $r1 *100;

    //     //R2: IF Persediaan BANYAK AND Pengeluaran SEDIKIT, THEN Prioritas RENDAH
    //     //myu persediaan banyak 
    //     if($inpp >= 700 && $inpp <= 1500){
    //         $per = $ss;
    //     }elseif($inpp >= 1500){
    //         $pers = 1;
    //     }else{
    //         $per = 0;
    //     }

    //     //myu pengeluaran sedikit
    //     if($inpk >= 800 && $inpk <= 1700){
    //         $pek = $ks;
    //     }elseif($inpk <= 1700){
    //         $pek = 1;
    //     }else{
    //         $pek = 0;
    //     }

    //     //prioritas tendah
    //     $r2 = min($per,$pek);
    //     $z2 = (100 - $r2)/100;


    //     // R3: IF Persediaan SEDIKIT AND Pengeluaran BANYAK, THEN Prioritas TINGGI
    //     //myu persediaan sedikit
    //     if($inpp >= 700 && $inpp >= 1500){
    //         $per = $ss;
    //     }elseif($inpp <= 700){
    //         $per = 1;
    //     }else{
    //         $per = 0;
    //     }
        
    //     //myu pengeluaran banyak
    //     if($inpk >= 800 && $inpp <= 1700){
    //         $pek = $sb;
    //     }elseif($inpp <= 1700){
    //         $pek = 1;
    //     }else{
    //         $pek = 0;
    //     }

    //     //prioritas tinggi
    //     $r3 = min($per,$pek);
    //     $z3 = $r3 *100;

    //     //R4: IF Persediaan SEDIKIT AND Pengeluaran SEDIKIT, THEN Prioritas RENDAH
    //     //myu persediaan sedikit
    //     if($inpp >= 700 && $inpp >= 1500){
    //         $per = $ss;
    //     }elseif($inpp <= 700){
    //         $per = 1;
    //     }else{
    //         $per = 0;
    //     }

    //     //myu pengeluaran sedikit
    //     if($inpk >= 800 && $inpk <= 1700){
    //         $pek = $ks;
    //     }elseif($inpk <= 1700){
    //         $pek = 1;
    //     }else{
    //         $pek = 0;
    //     }

    //     //prioritas tendah
    //     $r4 = min($per,$pek);
    //     $z4 = (100 - $r4)/100;

    //     $defuzzy =(($r1*$z1)+($r2*$z2)+($r3*$z3)+($r4*$z4))/($r1+$r2+$r3+$r4);

    //     if($defuzzy <=50 ){
    //         $prio = "Rendah";
    //     }else{
    //         $prio ="Tinggi";
    //     }
       
    //     return view('pusdalops.stok_gudang',compact('stoks','gudangs'));
    // }
}

