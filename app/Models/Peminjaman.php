<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use BinaryCats\Sku\HasSku;
use BinaryCats\Sku\Concerns\SkuOptions;
use Carbon\Carbon;

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

    protected $appends = [
        'span_status'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
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
    public function skuOptions(): SkuOptions
    {
        return SkuOptions::make()
            ->from('')
            ->target('is_code')
            ->using('PB-')
            ->forceUnique(false)
            ->generateOnCreate(true)
            ->refreshOnUpdate(false);
    }
    public function getSpanStatusAttribute()
    {
        $status = $this->attributes['is_status'];
        $date_now = Carbon::now()->format('Y-m-d');
        $date_confirmation = Carbon::parse($this->attributes['created_at'])->addDay(1)->format('Y-m-d');
        // $date_confirmation =  date('Y-m-d', strtotime('+1 days', strtotime($this->attributes['created_at'])));
        switch ($status) {
            case "success":
                return '<span class="badge badge-light-success fs-8 fw-bolder">Success</span>';
                break;
            case "canceled":
                if ($date_now >= $date_confirmation) {
                    return '<span class="badge badge-light-danger fs-8 fw-bolder">Expired</span>';
                }
                return '<span class="badge badge-light-danger fs-8 fw-bolder">Canceled</span>';
                break;
            case "pending":
                if ($date_now >= $date_confirmation) {
                    $peminjaman = Peminjaman::find($this->attributes['id']);
                    $peminjaman->update(['is_status' => 'canceled']);
                    return '<span class="badge badge-light-danger fs-8 fw-bolder">Expired/Canceled</span>';
                } else {
                    return '<span class="badge badge-light-warning fs-8 fw-bolder">Pending</span>';
                }
                break;
        }
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
