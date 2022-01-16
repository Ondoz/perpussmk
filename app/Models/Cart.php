<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'buku_id'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($q) {
            $q->uuid = Uuid::uuid4();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
