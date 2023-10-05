<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Helpers;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phones extends Model
{
    use HasFactory;

    protected $table = 'phones';

    protected $fillable = [
        'fixed', 'mobile', 'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    /* Mutators */
    public function setFixedAttribute($value)
    {
        $this->attributes['fixed'] = trim(Helpers::limpaTelefone($value));
    }

    public function setMobileAttribute($value)
    {
        $this->attributes['mobile'] = trim(Helpers::limpaTelefone($value));
    }
}
