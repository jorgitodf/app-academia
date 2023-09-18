<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayWeekTraining extends Model
{
    use HasFactory;

    protected $table = 'day_week_trainings';
    protected $fillable = [
        'day_week', 'training_sheets_id'
    ];

    public function training_sheet()
    {
        return $this->belongsTo(TrainingSheet::class);
    }

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'day_week_training_exercises')->withPivot(['series', 'repetition', 'charge']);
    }

    /* Mutators */
    public function setDayWeekAttribute($value)
    {
        $this->attributes['day_week'] = trim(mb_convert_case($value, MB_CASE_TITLE, "UTF-8"));
    }    
}
