<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
   protected $fillable = [
    'nama_laporan',
    'tanggal',
    'keterangan',
    'jumlah_korban',
    'desa','kecamatan',
    'gambar',
    'lokasi',
    'logistik',
    'id_trc',
    'status_laporan'
   ];

   public function user()
   {
      return $this->belongsTo('App\User');
   }
}
