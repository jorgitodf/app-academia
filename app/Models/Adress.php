<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Helpers;

class Adress extends Model
{
    use HasFactory;

    protected $table = 'adresses';
    protected $fillable = [
        'description', 'complement', 'number', 'zip_code', 'neighborhood_id', 'public_place_id', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function public_place()
    {
        return $this->belongsTo(PublicPlace::class);
    }

    public function neighborhoods()
    {
        return $this->belongsTo(Neighborhood::class);
    }


    /* Mutators */
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = trim(mb_convert_case($value, MB_CASE_TITLE, "UTF-8"));
    }

    public function setComplementAttribute($value)
    {
        $this->attributes['complement'] = trim(mb_convert_case($value, MB_CASE_TITLE, "UTF-8"));
    }

    public function setNumberAttribute($value)
    {
        $this->attributes['number'] = trim($value);
    }

    public function setZipCodeAttribute($value)
    {
        $this->attributes['zip_code'] = trim(Helpers::limpaCEP($value));
    }

}
