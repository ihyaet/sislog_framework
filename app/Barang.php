<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function gudang(){
        return $this->hasMany('App/Gudang');
    }
    protected $fillable = [
        'nama_barang',
        'deskripsi',
        'satuan'
    ];

}
