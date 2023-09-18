<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupExercise extends Model
{
    use HasFactory;

    protected $table = 'group_exercises';
    protected $fillable = [
        'name'
    ];

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }


    /* Mutators */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = trim(mb_convert_case($value, MB_CASE_TITLE, "UTF-8"));
    }
}
