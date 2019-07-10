<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluar extends Model
{
    protected $fillable = [
        'id_barang',
        'kuantitas',
        'kadaluarsa',
        'id_gudang',
        'deskripsi'
       ];
}
