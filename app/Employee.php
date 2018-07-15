<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'no_pegawai',
        'name',
        'alamat',
        'jenis_kelamin'
    ];
}
