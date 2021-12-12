<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use BinaryCats\Sku\HasSku;
use BinaryCats\Sku\Concerns\SkuOptions;
use Carbon\Carbon;

class Buku extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasSlug, HasSku;

    protected $fillable = [
        'code',
        'uuid',
        'title',
        'description',
        'slug',
        'jumlah_buku',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    /**
     * Get the options for generating the Sku.
     *
     * @return BinaryCats\Sku\SkuOptions
     */
    public function skuOptions(): SkuOptions
    {
        return SkuOptions::make()
            ->from(['title'])
            ->target('code')
            ->using('_')
            ->forceUnique(false)
            ->generateOnCreate(true)
            ->refreshOnUpdate(false);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($q) {
            $q->uuid = Uuid::uuid4();
        });
    }

    public function getImageAttribute()
    {
        $media = $this->getMedia('book');
        if ($media->count() > 0) {
            $firstMedia = $media->first();
            $key = 'image_' . $firstMedia->uuid;
            return cache()->rememberForever($key, function () use ($firstMedia) {
                return $firstMedia->getFullUrl();
            });
        } else {
            return 'https://ui-avatars.com/api/?name=' . urlencode($this->attributes['title']);
        }
    }

    public function getNewBookAttribute()
    {
        $newBookDate = $this->attributes['created_at'];
        if (Carbon::now()->between(Carbon::parse($newBookDate), Carbon::parse($newBookDate)->add(7, 'day'))) {
            return true;
        } else {
            return false;
        }
    }

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'buku_kategories')->withTimestamps();
    }

    public function peminjamanitem()
    {
        return $this->hasMany(PeminjamanItem::class);
    }
}
