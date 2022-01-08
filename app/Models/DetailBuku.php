<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBuku extends Model
{
    use HasFactory;

    protected $fillable = [
        'buku_id',
        'tgl_rilis',
        'bahasa',
        'penerbit',
        'negara',
        'jumlah_halaman',
        'description',
        'jumlah_buku'
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
