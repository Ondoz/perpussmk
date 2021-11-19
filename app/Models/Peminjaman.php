<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillabel = [
        'uuid',
        'date_start',
        'date_end',
        'user_id',
        'is_code',
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
