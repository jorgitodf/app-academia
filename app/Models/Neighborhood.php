<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    use HasFactory;

    protected $table = 'neighborhoods';
    protected $fillable = [
        'neighborhood', 'citie_id'
    ];

    public function adresses()
    {
        return $this->hasMany(Adress::class);
    }

    public function cities()
    {
        return $this->belongsTo(Citie::class);
    }
}
