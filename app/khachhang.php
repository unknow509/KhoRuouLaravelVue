<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table='khachhang';
    protected $fillable = [
        'TenKH','DiaChi','SDT',
    ];
}
