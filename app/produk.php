<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produks';
    protected $fillable = ['judul', 'slug', 'gambar','harga', 'deskripsi',];
}
