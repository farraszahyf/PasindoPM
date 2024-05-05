<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class stokproduk extends Model
{
    public function pesanan_detail() 
	{
	     return $this->hasMany('App\PesananDetail','produk_id', 'id');
}

	protected $table = 'stokproduks';
	protected $fillable = [
		'nama_produk',
		'harga',
		'stok',
		'keterangan',
		'gambar'
	];

	use HasFactory;
	}
