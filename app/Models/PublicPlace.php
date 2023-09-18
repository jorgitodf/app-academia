<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicPlace extends Model
{
    use HasFactory;

    protected $table = 'public_places';
    protected $fillable = [
        'name'
    ];

    public function adresses()
    {
        return $this->hasMany(Adress::class);
    }
}

