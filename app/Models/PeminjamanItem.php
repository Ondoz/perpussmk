<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class PeminjamanItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'peminjaman_id',
        'buku_id',
        'is_status'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($q) {
            return $q->uuid = Uuid::uuid4();
        });
    }
}