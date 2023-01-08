<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use BinaryCats\Sku\HasSku;
use BinaryCats\Sku\Concerns\SkuOptions;
use Carbon\Carbon;
use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingPrefix;
use Laravel\Scout\Builder;

class Peminjaman extends Model
{
    use HasFactory, HasSku, Searchable;

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
        // 'span_status',
        // 'name_user'
        'denda_buku'
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

    public function getNameUserAttribute()
    {
        return $this->user->name;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function peminjamanitem()
    {
        return $this->hasMany(PeminjamanItem::class);
    }

    public function getDendaBukuAttribute()
    {
        foreach ($this->peminjamanitem as $key => $value) {
            $arr = $value->pengembalian_item[0]->sum('denda');
        }
        return $arr;
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    #[SearchUsingPrefix('is_code', 'name_user')]

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array = $this->transform($array, [
            \App\Search\Transformers\CustomTransformer::class
        ]);

        $array['is_code'] = $this->is_code;
        $array['name_user'] = $this->user->name;

        return $array;

        // $this->toArray();
    }

    public function getScoutModelsByIds(Builder $builder, array $ids)
    {
        $query = static::usesSoftDelete()
            ? $this->withTrashed() : $this->newQuery();

        if ($builder->queryCallback) {
            call_user_func($builder->queryCallback, $query); // here
        }
        return $query->whereIn(
            $this->getScoutKeyName(),
            $ids
        )->get();
    }
}
