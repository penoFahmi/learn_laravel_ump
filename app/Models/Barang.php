<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';

    protected $fillable =[
        'nama_barang',
        'jumlah_barang',
        'gambar',
        'harga',
    ];
}
