<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Buku extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia,  HasSlug;
    protected $fillable = [
        'uuid',
        'title',
        'description',
        'slug'
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

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($q) {
            return $q->uuid = Uuid::uuid4();
        });
    }

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'buku_kategories')->withTimestamps();
    }
}
