<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Neighborhood extends Model
{
    use HasFactory;

    protected $table = 'neighborhoods';
    protected $fillable = [
        'neighborhood', 'citie_id'
    ];

    public function adresses(): HasMany
    {
        return $this->hasMany(Adress::class);
    }

    public function citie(): BelongsTo
    {
        return $this->belongsTo(Citie::class);
    }
}
