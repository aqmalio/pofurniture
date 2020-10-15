<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produks';
    protected $fillable = ['judul', 'slug', 'gambar', 'model3d', 'harga', 'deskripsi',];
}
