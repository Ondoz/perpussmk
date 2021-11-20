<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use BinaryCats\Sku\HasSku;
use BinaryCats\Sku\Concerns\SkuOptions;

class Peminjaman extends Model
{
    use HasFactory, HasSku;

    protected $table = 'peminjaman';

    protected $fillable = [
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
            $q->uuid = Uuid::uuid4();
        });
    }

    /**
     * Get the options for generating the Sku.
     *
     * @return BinaryCats\Sku\SkuOptions
     */
    public function skuOptions() : SkuOptions
    {
        return SkuOptions::make()
            ->from('')
            ->target('is_code')
            ->using('PB-')
            ->forceUnique(false)
            ->generateOnCreate(true)
            ->refreshOnUpdate(false);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function peminjamanitem()
    {
        return $this->hasMany(PeminjamanItem::class);
    }
}
