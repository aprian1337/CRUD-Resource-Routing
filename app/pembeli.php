<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    protected $table = 'pembeli';
    protected $fillable = ['NM_PEMBELI', 'JENIS_KELAMIN', 'ALAMAT', 'KOTA'];
    protected $primaryKey = 'KD_PEMBELI';
}
