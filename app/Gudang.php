<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $fillable = [
        'deskripsi',
        'alamat_gudang'
    ];

}
