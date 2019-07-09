<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index() {
        $laporans = DB::table('laporans')
            ->select(DB::raw('*'))
            ->orderby('tanggal', 'asc')
            ->get();
        
        $dataAcc = DB::table('laporans')
            ->select (DB::raw('tanggal', 'status_laporan'))
            ->where('status_laporan', '=', 'Diterima')
            ->orderBy('tanggal','asc')
            ->get();
        
        // dd($dataAcc);
        
        $dataDec = DB::table('laporans')
            ->select (DB::raw('tanggal', 'status_laporan'))
            ->where('status_laporan', '=', 'Ditolak')
            ->orderBy('tanggal','asc')
            ->get();
        
        $months = [];
        $arrAcc = [];
        $arrDec = [];
        $beforeValue = "";

        foreach ($laporans as $laporan) {
            $month = $laporan->tanggal;
            $month = date('F', strtotime($month));
            if($month != $beforeValue) {
                $months[] = $month;
                $beforeValue = $month;
            }
        }

        $monthLength = count($months);
        for($i=0; $i<$monthLength; $i++) {
            $arrAcc[$i] = 0;
            $arrDec[$i] = 0;
        }

        foreach($dataAcc as $data) {
            $month = $data->tanggal;
            $month = date('F', strtotime($month));
            $index = array_search($month, $months);
            $arrAcc[$index] = $arrAcc[$index] + 1;
        }

        foreach($dataDec as $data) {
            $month = $data->tanggal;
            $month = date('F', strtotime($month));
            $index = array_search($month, $months);
            $arrDec[$index] = $arrDec[$index] + 1;
        }

        // foreach($dataDec as $data) {
        //     $arrDec[] = $data->jumlah;
        // }

        // dd($months);

        // dd($laporans[0]->tanggal);
        // dd($months);
        return view('pusdalops.statistik', compact('months', 'arrAcc', 'arrDec'));
    }

    //
}
