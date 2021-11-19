<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class UserDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'user_id',
        'kelas_id',
        'alamat',
        'no_phone',
        'dob'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($q) {
            return $q->uuid = Uuid::uuid4();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
