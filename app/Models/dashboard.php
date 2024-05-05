<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dashboard extends Model
{
    protected $table = 'pesanans';
    protected $fillable = [
        'nama',
        'email',
        'sekolah',
        'tanggal',
		'jenis_buku',
		'jumlah_pesanan'
    ];
}
