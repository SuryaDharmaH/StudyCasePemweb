<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'tb_produk';
    protected $primaryKey = 'idProduk';
    protected $fillable = ['idProduk','judulProduk','deskripsi','harga','gambar']; 
    protected $guarded = [];
    use HasFactory;
}
