<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class PengembalianItem extends Model
{
    use HasFactory;

    protected $table = [
        'uuid',
        'peminjaman_item_id',
        'qty',
        'keterangan_status',
        'denda'
    ];

    protected static function boot()
    {
        parent::boot();
        static::created(function ($q) {
            return $q->uuid = Uuid::uuid4();
        });
    }

    public function peminjaman_item()
    {
        return $this->belongsTo(PeminjamanItem::class);
    }
}
