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
use Faker\Factory;
use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingPrefix;
use Laravel\Scout\Builder;


class Buku extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasSlug, HasSku, Searchable;


    protected $fillable = [
        'code',
        'uuid',
        'judul',
        'slug',
        'penulis',
        'kategori_id'
    ];

    protected $appends = [
        'image'
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('judul')
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
            ->from('buku.judul')
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
            $faker = Factory::create();
            $q->uuid = Uuid::uuid4();
            $q->code = $faker->unique()->ean8();
        });
    }

    public function detail_buku()
    {
        return $this->hasOne(DetailBuku::class);
    }

    public function getImageAttribute()
    {
        $media = $this->getMedia('default');
        if ($media->count() > 0) {
            $firstMedia = $media->first();
            $key = 'image_' . $firstMedia->uuid;
            return $firstMedia->getFullUrl();
            // return cache()->rememberForever($key, function () use ($firstMedia) {
            // });
        } else {
            return 'https://ui-avatars.com/api/?name=' . urlencode($this->attributes['judul']);
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
        return $this->belongsTo(Kategori::class);
    }

    public function peminjamanitem()
    {
        return $this->hasMany(PeminjamanItem::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    #[SearchUsingPrefix(['judul'])]

    public function toSearchableArray()
    {
        return [
            'judul' => $this->judul,
        ];
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
