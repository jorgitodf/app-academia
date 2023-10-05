<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PublicPlace extends Model
{
    use HasFactory;

    protected $table = 'public_places';
    protected $fillable = [
        'name'
    ];

    public function adresses(): HasMany
    {
        return $this->hasMany(Adress::class);
    }
}

