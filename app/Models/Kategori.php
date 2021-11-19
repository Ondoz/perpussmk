<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Kategori extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'uuid',
        'name',
        'slug'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($q) {
            return $q->uuid = Uuid::uuid4();
        });
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'buku_kategories')->withTimestamps();
    }
}
