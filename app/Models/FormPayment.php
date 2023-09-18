<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPayment extends Model
{
    use HasFactory;

    protected $table = 'form_payment';
    protected $fillable = [
        'payment_method'
    ];

    public function registrations()
    {
        return $this->hasOne(Registration::class);
    }


    /* Mutators */
    public function setFormPaymentAttribute($value)
    {
        $this->attributes['payment_method'] = trim(mb_convert_case($value, MB_CASE_TITLE, "UTF-8"));
    }  
}
