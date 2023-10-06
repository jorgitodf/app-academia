<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeUser extends Model
{
    use HasFactory;

    protected $table = 'type_users';
    protected $fillable = [
        'type'
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /* Mutators */
    public function setTypeAttribute($value)
    {
        $this->attributes['type'] = trim(mb_convert_case($value, MB_CASE_TITLE, "UTF-8"));
    }
}
