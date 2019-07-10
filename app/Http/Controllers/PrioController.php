<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PrioController extends Controller
{
   public function prio($id, request $request){
        $stoks = DB::tabels('stoks')
        ->select(DB::raw('*'))
        ->get();

        $keluars = DB::tabels('$keluars')
        ->select(DB::raw('*'))
        ->get();

        $gudangs = DB::tabels('$gudangs')
        ->select(DB::raw('*'))
        ->get();


        $inpp = $stoks->sum('kuantitas');
        $inpk = $keluars->sum('kuantitas');
        
        $prio = $gudangs->prioritas;

        //persediaan
        $sb = (700 - $inpp )/(1500-700);
        $ss = ($inpp - 700)/(1500-700);

        //pengeluaran
        $kb = (800 - $inpk)/(1700 - 800);
        $ks = ($inpk - 800)/(1700 - 800);

        //R1: IF Persediaan BANYAK AND Pengeluaran BANYAK, THEN Prioritas TINGGI
        //myu persediaan banyak
        if($inpp >= 700 && $inpp <= 1500){
            $per = $sb;
        }elseif($inpp >= 1500){
            $per = 1;
        }else{
            $per = 0;
        }

        //myu pengeluaran banyak
        if($inpk >= 800 && $inpp <= 1700){
            $pek = $sb;
        }elseif($inpp <= 1700){
            $pek = 1;
        }else{
            $pek = 0;
        }

        //prioritas tinggi
        $r1 = min($per,$pek);
        $z1 = $r1 *100;

        //R2: IF Persediaan BANYAK AND Pengeluaran SEDIKIT, THEN Prioritas RENDAH
        //myu persediaan banyak 
        if($inpp >= 700 && $inpp <= 1500){
            $per = $ss;
        }elseif($inpp >= 1500){
            $pers = 1;
        }else{
            $per = 0;
        }

        //myu pengeluaran sedikit
        if($inpk >= 800 && $inpk <= 1700){
            $pek = $ks;
        }elseif($inpk <= 1700){
            $pek = 1;
        }else{
            $pek = 0;
        }

        //prioritas tendah
        $r2 = min($per,$pek);
        $z2 = (100 - $r2)/100;


        // R3: IF Persediaan SEDIKIT AND Pengeluaran BANYAK, THEN Prioritas TINGGI
        //myu persediaan sedikit
        if($inpp >= 700 && $inpp >= 1500){
            $per = $ss;
        }elseif($inpp <= 700){
            $per = 1;
        }else{
            $per = 0;
        }
        
        //myu pengeluaran banyak
        if($inpk >= 800 && $inpp <= 1700){
            $pek = $sb;
        }elseif($inpp <= 1700){
            $pek = 1;
        }else{
            $pek = 0;
        }

        //prioritas tinggi
        $r3 = min($per,$pek);
        $z3 = $r3 *100;

        //R4: IF Persediaan SEDIKIT AND Pengeluaran SEDIKIT, THEN Prioritas RENDAH
        //myu persediaan sedikit
        if($inpp >= 700 && $inpp >= 1500){
            $per = $ss;
        }elseif($inpp <= 700){
            $per = 1;
        }else{
            $per = 0;
        }

        //myu pengeluaran sedikit
        if($inpk >= 800 && $inpk <= 1700){
            $pek = $ks;
        }elseif($inpk <= 1700){
            $pek = 1;
        }else{
            $pek = 0;
        }

        //prioritas tendah
        $r4 = min($per,$pek);
        $z4 = (100 - $r4)/100;

        $defuzzy =(($r1*$z1)+($r2*$z2)+($r3*$z3)+($r4*$z4))/($r1+$r2+$r3+$r4);

   }
}
