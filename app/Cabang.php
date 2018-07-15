<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    //
    protected $fillable = [
        'nama_cabang',
        'alamat'
    ];
}
