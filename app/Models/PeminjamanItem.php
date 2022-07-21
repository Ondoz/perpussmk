<?php

namespace App\Models;

use Carbon\Carbon;
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
        'qty',
    ];
    protected $appends = [
        'qty_sum_pengembalian',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($q) {
            return $q->uuid = Uuid::uuid4();
        });
    }

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class);
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    public function pengembalian_item()
    {
        return $this->hasMany(PengembalianItem::class);
    }

    public function getQtySumPengembalianAttribute()
    {
        $data = $this->pengembalian_item()->get();
        return $data->sum('qty');
    }
}
