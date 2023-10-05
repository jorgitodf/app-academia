<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Citie extends Model
{
    use HasFactory;

    protected $table = 'cities';
    protected $fillable = [
        'name', 'state_id'
    ];

    public function states()
    {
        return $this->belongsTo(State::class);
    }

    public function neighborhoods(): HasMany
    {
        return $this->hasMany(Neighborhood::class);
    }
}
